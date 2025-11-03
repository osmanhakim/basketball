<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProjectRequest;
use App\Models\Project;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProjectController extends Controller
{
    private $project;

    public function __construct(Project $project)
    {
        $this->middleware(['permission:read-projects'])->only('index', 'show');
        $this->middleware(['permission:create-projects'])->only('create', 'store');
        $this->middleware(['permission:update-projects'])->only('edit', 'update');
        $this->middleware(['permission:delete-projects'])->only('destroy');
        $this->project = $project;
    }

    public function index()
    {
        try {
            $projects = $this->project->latest('id')->get();
            return view('admin.projects.index', compact('projects'));
        } catch (\Exception $e) {
            return $e->getMessage();
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(ProjectRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'cover', 'images']);
            $project = $this->project->create($requested_data);
            $project->uploadFile();
            $project->uploadFiles();

            return redirect()->route('projects.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Project $project)
    {   
        $images = $project->photos;
        return view('admin.projects.show', compact('project','images'));
    }

    public function edit(Project $project)
    {
        try {
          //  $images = $project->files()->where('type', '!=', 'cover')->get();
            $images = $project->photos;
         //   dd($images);
            return view('admin.projects.edit', compact('project', 'images'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function update(ProjectRequest $request, Project $project)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
            // dd($request);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'cover', 'images', 'deleted_files']);
            $requested_data['updated_at'] = Carbon::now();
            $photos = $request->input('deleted_files');
            
            foreach($photos as $photo) {
              $x = Photo::find($photo);
              $x->delete();
            }

            $project->update($requested_data);
            $project->updateFile();
            $project->updateFiles();

            return redirect()->route('projects.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Project $project)
    {
        try {
            $project->deleteFiles();
            $project->delete();
            return redirect()->route('projects.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}