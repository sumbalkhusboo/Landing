<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Team;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\History;
use Illuminate\Http\Request;
use App\Models\Gallery;
class DashboardController extends Controller 
{
    public function index()
    {
       $totalemployees = Team::count();
       $totalprojects = Project::count();
       $totalcontacts = Contact::count();
        return view('index',compact('totalemployees','totalprojects','totalcontacts'));
    }
    public function create()
    { 
        return view('admin.add_project');
    }
    
    public function projectList()
    {
        $projects = Project::all();
        return view('admin.list_project',compact('projects'));
    }

    public function searchproject(Request $request)
    {   
         $project_name=$request->project_name;
         $projects = Project::where('project_name',$project_name)->get();
        
        return view('admin.project_name_search',compact('projects'));
    }


    public function contactList()
    {
        $contacts = Contact::all();
        return view('admin.list_contact',compact('contacts'));
    }
    public function employeeList()
    {
        $employees = Team::all();
        return view('admin.list_employee',compact('employees'));
    }
    public function faqList()
    {
        $faqs = Faq::all();
        return view('admin.list_faq',compact('faqs'));
    }

   
    
    public function insertproject(Request $request)
    {
   
        $projects= new Project();

        $projects->project_name = $request->project_name;
        $projects->description = $request->description;
        $projects->link = $request->link;
        $projects->save();
     
        return back()->with(['status' => 'success', 'message' => 'project stored successfully']);;

    
    }



    public function projectEdit(Request $request)
    {
        $project = Project::where('id',$request->id)->first();
        return view('admin.edit_project',compact('project'));
    }

    public function faqEdit(Request $request)
    {
        $faq = Faq::where('id',$request->id)->first();
        return view('admin.edit_faq',compact('faq'));
    }

    public function employeeEdit(Request $request)
    {
        $employee = Team::where('id',$request->id)->first();
        return view('admin.edit_employee',compact('employee'));
    }

    public function projectupdate(Request $request, $id)
    {
      $projects = Project::where('id',$id)->first();

       $projects->project_name = $request->project_name ;
       $projects->description = $request->description;
       $projects->link = $request->link;
       $projects->save();
       return redirect()->route('list-project')->with(['status' => 'success', 'message' => 'project updated successfully']);
       
    }

 
    public function projectdelete($id)
    {
        $projects = Project::find($id);

        $projects->delete();

        return back()->with('success', 'Success! Deleted Record');
    }


    public function faqupdate(Request $request, $id)
    {
      $faqs = Faq::where('id',$id)->first();

       $faqs->heading = $request->heading ;
       $faqs->detail = $request->detail;
       $faqs->links = $request->links;
       $faqs->save();
       return redirect()->route('list-faq')->with(['status' => 'success', 'message' => 'faq updated successfully']);;
       
    }

 
    public function faqdelete($id)
    {
        $faqs = Faq::find($id);

        $faqs->delete();

        return back()->with('success', 'Success! Deleted Record');
    }






    public function add()
    {
        
        return view('admin.add_employee');
    }



    public function insertemployee(Request $request)
    {
        		
        $teams= new Team();

        $file = $request->file('image');
        $ext = $request->image->getClientOriginalExtension();
        $fileName = time() . rand(1, 100) . '.' . $ext;
        $file->move(public_path('teams/img'),$fileName);
        $teams->emp_img = $fileName;
       
        $teams->emp_name = $request->emp_name;
        $teams->designation = $request->designation;
        $teams->save();
     
        return back()->with(['status' => 'success', 'message' => 'Employee stored successfully']);;

    

    }





   

    public function createfaq()
    {
        
        return view('admin.add_faq');
    }



    public function insertfaq(Request $request)
    {
        		
        $faq= new Faq();
        
       
        $faq->heading = $request->heading;
        $faq->detail = $request->detail;
        $faq->links = $request->link;
        $faq->save();
     
        return back()->with(['status' => 'success', 'message' => 'Employee stored successfully']);;

    
    }
    public function createhistory()
    {
        $history =  History::first();
        return view('admin.add_history',compact('history'));
    }



    public function inserthistory(Request $request)
    {
        
        $history =  History::where('id',$request->id)->first();
        
       
        $history->project = $request->project;
        $history->happy_client =$request->happy_client ;
        $history->hour_of_support = $request->hour_of_support;
        $history->hard_worker = $request->hard_worker ;
        $history->save();
     
        return back()->with(['status' => 'success', 'message' => 'History stored successfully']);;

       



    }








    public function employeeupdate(Request $request, $id)
    {
      $teams = Team::where('id',$id)->first();

      $file = $request->file('image');
      $ext = $request->image->getClientOriginalExtension();
      $fileName = time() . rand(1, 100) . '.' . $ext;
       $file->move(public_path('teams/img'), $fileName);
    
      $teams->emp_img = $fileName;
      $teams->emp_name = $request->emp_name;
      $teams->designation = $request->designation;
      $teams->save();
     


   
       return redirect()->route('list-employee')->with(['status' => 'success', 'message' => 'project updated successfully']);;
       
    }

 
    public function employeedelete($id)
    {
        $teams = Team::find($id);

        $teams->delete();

        return back()->with('success', 'Success! Deleted Record');
    }





}

