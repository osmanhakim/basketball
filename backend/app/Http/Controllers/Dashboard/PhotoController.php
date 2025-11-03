<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\PhotoRequest;
use App\Models\Project;

class PhotoController extends Controller
{
       private $photo;

    public function __construct(Photo $photo)
    {
        $this->middleware(['permission:read-photos'])->only('index', 'show');
        $this->middleware(['permission:create-photos'])->only('create', 'store');
        $this->middleware(['permission:update-photos'])->only('edit', 'update');
        $this->middleware(['permission:delete-photos'])->only('destroy');
        $this->photo = $photo;
    }

    public function create()
    {   $projects = Project::all();
        return view('admin.photos.create',compact('projects'));
    }

     
    public function index()
    {
        try {
            $photos = $this->photo->latest('id')->get();
            return view('admin.photos.index', compact('photos'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show($id)
    {
        try {
            $photo =  $this->photo->find($id);
            $project = $photo->project;
            return view('admin.photos.show', compact('photo','project'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function store(PhotoRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $photo = $this->photo->create($requested_data);
            $photo->uploadFile();
           // dd($photo);
            return redirect()->route('photos.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function edit(Photo $photo) {
        $myProject = $photo->project;
        $projects = Project::all();
        return view('admin.photos.edit',compact('photo','projects','myProject'));
     }
 
     public function update(PhotoRequest $request, Photo $photo)
     {
         try {
             if (!$request->has('status'))
                 $request->request->add(['status' => 0]);
             else
                 $request->request->add(['status' => 1]);
         //  dd($request);
             $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
             $requested_data['updated_at'] = Carbon::now();
             $photo->update($requested_data);
             $photo->updateFile();
             return redirect()->route('abouts.index')->with(['success' => __('message.updated_successfully')]);
         } catch (\Exception $e) {
             return redirect()->back()->with(['error' => __('message.something_wrong')]);
         }
     }

     public function destroy(Photo $photo)
     {
         try {
             $photo->deleteFile();
             $photo->delete();
             return redirect()->route('photos.index')->with(['success' => __('message.deleted_successfully')]);
         } catch (\Exception $e) {
             return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
         }
     }
 


}