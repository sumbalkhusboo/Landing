<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Team;
use App\Models\Contact;
use App\Models\History;
use App\Models\Faq;
use App\Models\Job;
use App\Models\Gallery;
use Illuminate\Support\Facades\Validator;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $galleries = Gallery::all();
     return view('frontend.home',compact('galleries',));
    }
    public function job()
    {
     $jobs= Job::get();
     $visibleWords = 10;
     return view('frontend.jobs',compact('jobs','visibleWords'));
    }


    public function JobDetail(Request $req)
    {
        $job = Job::find($req->id);
        $jobs= Job::get();
        return view('frontend.job_detail',['job'=>$job,'jobs'=>$jobs]);
    } 



    public function imageDetail(Request $req)
    {
      
        $gallery = Gallery::find($req->id);
        $galleries= Gallery::get();
        return view('frontend.image_detail',['gallery'=>$gallery,'galleries'=>$galleries]);
    } 

    public function faq()
    {
        $history =  History::first();
        $faqs= Faq::get();
     return view('frontend.faq',compact('faqs','history'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('frontend.gallery',compact('galleries',));
    }

    // orderBy('id', 'DESC')->

    public function about()
    {

     return view('frontend.about');
    }
    public function team()
    {
        $employees= Team::orderBy('id', 'DESC')->get();
     return view('frontend.team',compact('employees'));
    }

    public function projects()
    {
      
     $projects = Project::get();

     return view('frontend.project',compact('projects'));
    }

    public function contact()
    {

     return view('frontend.contact');
    }
    public function ajex_date(Request $req)
    {

        if(!empty($req->from) && !empty($req->to)){
            $from = $req->from;
            $to = $req->to;
           
        }else if(empty($req->to))
        {
            $from = $req->from;
            $to = $req->from;
        } else{
            $from = $req->to;
            $to = $req->to;
        }
   
        // $from = $req->from;
        // $to = $req->to;
      
        
        $contacts = Contact::when($from,function($qu) use ($from){
            return $qu->whereDate('created_at','>=',$from);
        })
        ->when($to,function($qu) use ($to){
            return $qu->whereDate('created_at','<=',$to);
        });
      
        $contacts=$contacts->get();
        return view('admin.ajex.ajex-date', ['contacts'=>$contacts]);
    }


    public function insertcontact(Request $request)
    {
        $rules = array(
            'name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|regex:/(.*)@myemail\.com/i',
            'phone' => 'required|min:11|max:11',
            'city' => 'required|regex:/^[a-zA-Z]+$/u',
            'your_massge' => 'required|regex:/^[a-zA-Z]+$/u',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->with(['status' => 'danger', 'message' => $validator->errors()->first()]);
        }
        $contact= new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->city = $request->city;
        $contact->your_massge = $request->your_massge;
        
        $contact->save();
     
        return back()->with(['status' => 'success', 'message' => 'your massage has been sent successfully']);;

    
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
