<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function createjob()
    {
        
        return view('admin.add_job');
    }

    public function insertjob(Request $request)

    {
        		
        $jobs= new Job();
        $jobs->job_title = $request->job_title;
        $file = $request->file('job_image');
        $ext = $request->job_image->getClientOriginalExtension();
        $fileName = time() . rand(1, 100) . '.' . $ext;
        $file->move(public_path('frontend_assets/jobs'),$fileName);
        $jobs->job_image = $fileName;
      
    
        

        $jobs->job_description = $request->description;
        $jobs->job_link = $request->job_link;
        $jobs->save();
     
        return back()->with(['status' => 'success', 'message' => 'job stored successfully']);;

    

    }
    
    public function jobEdit(Request $request)
    {
        $job = Job::where('id',$request->id)->first();
        return view('admin.edit_job',compact('job'));
    }
    public function jobupdate(Request $request, $id)
    {
      $jobs = Job::where('id',$id)->first();
    $jobs->job_title = $request->job_title;
      $file = $request->file('job_image');
      $ext = $request->job_image->getClientOriginalExtension();
      $fileName1 = time() . rand(1, 100) . '.' . $ext;
       $file->move(public_path('frontend_assets/jobs'), $fileName1);
    $jobs->job_image = $fileName1;



    
     
      $jobs->job_description = $request->job_description;
      $jobs->job_link = $request->job_link;
      $jobs->save();
     


   
       return redirect()->route('list-job')->with(['status' => 'success', 'message' => 'job updated successfully']);;
       
    }

 
    public function jobdelete($id)
    {
        $jobs = Job::find($id);

        $jobs->delete();

        return back()->with('success', 'Success! Deleted Record');
    }



    
    
    public function jobList()
    {
        $jobs = Job::all();
        return view('admin.list_job',compact('jobs'));
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
