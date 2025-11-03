<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class AboutController extends Controller
{      private $about;

    public function __construct(About $about)
    {
        $this->middleware(['permission:read-abouts'])->only('index', 'show');
        $this->middleware(['permission:create-abouts'])->only('create', 'store');
        $this->middleware(['permission:update-abouts'])->only('edit', 'update');
        $this->middleware(['permission:delete-abouts'])->only('destroy');
        $this->about = $about;
    }

    //
    public function create()
    {
        return view('admin.about.create');
    }

     
    public function index()
    {
        try {
            $abouts = $this->about->latest('id')->get();
            return view('admin.about.index', compact('abouts'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    
    public function show($id)
    {
        try {
            $about =  $this->about->find($id);
            return view('admin.about.show', compact('about'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function store(AboutRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $about = $this->about->create($requested_data);
            $about->uploadFile();

            return redirect()->route('abouts.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function edit(About $about) {
       return view('admin.about.edit',compact('about'));
    }

    public function update(AboutRequest $request, About $about)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
        //  dd($request);
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $about->update($requested_data);
            $about->updateFile();
            return redirect()->route('abouts.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


}