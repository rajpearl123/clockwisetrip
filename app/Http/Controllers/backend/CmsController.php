<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\PrivacyPolicyModel;
use App\Models\TearmConditionModel;
use App\Models\AboutUsModel;
use App\Models\Footer;
use App\Models\Home;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class CmsController extends Controller
{
    public function about_us(){    
        $aboutUs=AboutUsModel::first();
        return view('backend.cms.about_us',compact('aboutUs'));
    }
    
    public function store_about_us(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $aboutUs = AboutUsModel::first();
    
        if ($aboutUs) {
            $aboutUs->title = $request->input('title');
            $aboutUs->subtitle = $request->input('subtitle');
            $aboutUs->description = $request->input('description');

            if($request->hasFile('image')){
                $image=$request->image;
                $filename=time().'.'.$image->getClientOriginalExtension();
                $path=public_path('/images');
                $image->move($path, $filename);
    
                $aboutUs->image=$filename;
            }
           
            
            $aboutUs->save(); 
        } else {
            AboutUsModel::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'image' => $request->hasFile('image') ? $request->file('image')->move('images/', 'public') : null,
            ]);
        }
    
        return redirect()->back()
            ->with('success', 'About Us saved successfully!');
    }
    
    public function contact(){
        return view('backend.cms.contactus');
    }
    public function privacy_policy(){
        $data=PrivacyPolicyModel::first();
        return view('backend.cms.privacy_policy',compact('data'));
    }
    
    public function store_privacy_policy(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'heading' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $privacyData = PrivacyPolicyModel::first();

    if ($privacyData) {
        $privacyData->heading = $request->heading;
        $privacyData->content = $request->content;  
        $privacyData->save(); 
    } else {
        PrivacyPolicyModel::create([
            'heading' => $request->heading,
            'content' => $request->content,
        ]);
    }

    return redirect()->back()
        ->with('success', 'Privacy policy saved successfully!');
   }

     
   public function terms_and_conditions(){
    $data=TearmConditionModel::first();
    return view('backend.cms.terms_and_conditions',compact('data'));
}

public function store_tearm_condition(Request $request)
{
$validator = Validator::make($request->all(), [
    'heading' => 'required|string|max:255',
    'content' => 'required|string',
]);

if ($validator->fails()) {
    return redirect()->back()
        ->withErrors($validator)
        ->withInput();
}

$privacyData = TearmConditionModel::first();

if ($privacyData) {
    $privacyData->heading = $request->heading;
    $privacyData->content = $request->content;  
    $privacyData->save(); 
} else {
    TearmConditionModel::create([
        'heading' => $request->heading,
        'content' => $request->content,
    ]);
}

return redirect()->back()
    ->with('success', 'Privacy policy saved successfully!');
}

public function footer(){
    $data=Footer::first();
    return view('backend.cms.footer',compact('data'));
}


public function store_footer(Request $request){
    $validator = Validator::make($request->all(), [
        'mobile_no' => 'required',
        'email' => 'required|email'
    ]);
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $footer = Footer::first();

    if ($footer) {
        $footer->mobile_no = $request->input('mobile_no');
        $footer->email = $request->input('email');
        $footer->save(); 
    } else {
        Footer::create([
            'mobile_no' => $request->mobile_no,
            'email' => $request->email
        ]);
    }

    return redirect()->back()
        ->with('success', 'Footer saved successfully!');
}


public function home(){
    $data=Home::first();
    return view('backend.cms.home',compact('data'));
}


public function store_home(Request $request){
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $home = Home::first();

    if ($home) {
        $home->title = $request->input('title');
        $home->sub_title = $request->input('subtitle');

        if($request->hasFile('image')){
            $image=$request->image;
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('/images');
            $image->move($path, $filename);

            $home->banner_image=$filename;
        }
       
        
        $home->save(); 
    } else {
        Home::create([
            'title' => $request->title,
            'sub_title' => $request->subtitle,
            'banner_image' => $request->hasFile('image') ? $request->file('image')->move('images/', 'public') : null,
        ]);
    }

    return redirect()->back()
        ->with('success', 'Home Page saved successfully!');
}


}
