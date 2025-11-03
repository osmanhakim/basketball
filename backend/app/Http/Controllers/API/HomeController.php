<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Http\Resources\CounterResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\SliderResource;
use App\Models\About;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Feature;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Mail;
use App\Mail\myMail;

class HomeController extends Controller
{
    private $slider;
    private $page;
    private $feature;
    private $counter;
    private $client;

    public function __construct(Slider $slider, Page $page, Feature $feature, Counter $counter, Client $client)
    {
        $this->slider = $slider;
        $this->page = $page;
        $this->feature = $feature;
        $this->counter = $counter;
        $this->client = $client;
    }

    public function __invoke(Request $request)
    {
        try {
            $data['sliders'] = SliderResource::collection($this->slider->active()->latest('id')->get());
            $data['pages'] = PageResource::collection($this->page->get());
            $data['features'] = FeatureResource::collection($this->feature->active()->latest('id')->get());
            $data['counters'] = CounterResource::collection($this->counter->active()->latest('id')->get());
            $data['clients'] = ClientResource::collection($this->client->active()->latest('id')->get());
            return successResponse($data, 'success', 200);
        } catch (\Exception $e) {
            return failureResponse(__("message.something_wrong"), 'error', 400);
        }
    }
    
    public function sendMail(Request $request) {
        try {
            
            Mail::to($request->input('userEmail'))->send(new myMail($request->all()));
     
           $data = $request->all();
           $data['adminName'] = 'osman hakim';
           //dd($data);
            Mail::to('osman.hadgo@gmail.com')->send(new myMail($request->all()));
           // return redirect()->back()->with(['success' => __('message.send')]);  
            //return response()->json(['success' => __('message.send')],200);
            // return redirect('/');
         }
         catch(\Exception $error) {
               dd($error);
               return response()->json(['error' => $error->getMessage()],$error->getCode());
            // return redirect()->back()->with(['error' => $error->getMessage()],$error->getCode());
         }
    }

    public function sliders(Request $request,$id) {
        $slide = Slider::find($id);
        return json_encode(['data'=>$slide],200);
    }

    public function homePageSlider(Request $request) {
       $slider = Slider::where('page_1','=','1')->first();
        return json_encode(['data'=>$slider],200);
    }

    public function secondPageSlider(Request $request) {
        $slider = Slider::where('page_2','=','1')->first();
         return json_encode(['data'=>$slider],200);
     }

    public function features(Request $request) {
          $features = Feature::all();
          return json_encode(['data'=>$features],200);
    }

    public function aboutById(Request $request,$id) {
        $result = About::find($id);
        if(!$result) 
         return response()->json(['data'=> 'about not found'],'404');
         return response()->json(['data'=>$result],200);
    }

    public function about(Request $request) {
        $first = About::first();
        $result = About::where('id','>',$first->id)->get();
        if(!$result) 
         return response()->json(['data'=> 'about not found'],'404');
         return response()->json(['data'=>$result],200);
    }

    public function projectList(Request $request) {
         $projects = Project::all();
         $result = [];
         
         foreach($projects as $project) {
            $result[]=['id'=>$project->id,'name'=>$project->name];
         }

         return response()->json(['data'=>$result],200);
    }

    public function getAllProjects (Request $request) {
      $result = [];
      $photos = Photo::all();
         return response()->json(['data' => $photos],200);
    }

    public function getProjectById(Request $request,$id) {
       $project = Project::find($id);
       $photos = Photo::where('project_id',$id)->get();
       return response()->json(['data' => $photos]);
    }


    public function getTestimonials(Request $request) {
     $all = Testimonial::all();
     $result = ['data'=> $all];
     return response()->json(['data' => $result]);
    }
}