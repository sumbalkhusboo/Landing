<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Folder;

class GalleryController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creategallery()
    {
        return view('admin.add_gallery');
    }
    public function add_folder()
    {
        return view('admin.add_folder');
    }

    public function insertfolder(Request $request)
    {

     
    // return $request->all();
        $folder= new Folder();
        $file = $request->file('folder_img');
        $ext = $request->folder_img->getClientOriginalExtension();
        $fileName = time() . rand(1, 100) . '.' . $ext;
        $file->move(public_path('frontend_assets/img/folderImage'),$fileName);
        $folder->folder_img = $fileName;
      

       
        $folder->folder_name = $request->folder_name;
        
        $folder->save();
     
        return back()->with(['status' => 'success', 'message' => 'folder stored successfully']);

    
    }
    public function list_folder()
    {
        $folders = Folder::all();
        return view('admin.list_folder',compact('folders'));
    }
    public function insertgallery(Request $request)
    {

     
    // return $request->all();
        $gallery= new Gallery();
        $file = $request->file('image');
        $ext = $request->image->getClientOriginalExtension();
        $fileName = time() . rand(1, 100) . '.' . $ext;
        $file->move(public_path('frontend_assets/jobs'),$fileName);
        $gallery->image = $fileName;
      

       
        $gallery->links = $request->links;
        
        $gallery->save();
     
        return back()->with(['status' => 'success', 'message' => 'image stored successfully']);

    
    }
    public function galleryList()
    {
        $galleries = Gallery::all();
        return view('admin.list_gallery',compact('galleries'));
    }




    public function galleryEdit(Request $request)
    {
        $gallery = Gallery::where('id',$request->id)->first();
        return view('admin.edit_gallery',compact('gallery'));
    }


    public function galleryupdate(Request $request, $id)
    {
      $gallery = Gallery::where('id',$id)->first();
   
      $file = $request->file('image');
      $ext = $request->image->getClientOriginalExtension();
      $fileName1 = time() . rand(1, 100) . '.' . $ext;
       $file->move(public_path('frontend_assets/jobs'), $fileName1);
    $gallery->image = $fileName1;


      $gallery->descriptions = $request->descriptions;
      $gallery->links = $request->links;
      $gallery->save();
     


   
       return redirect()->route('list-gallery')->with(['status' => 'success', 'message' => 'image updated successfully']);;
       
    }
    public function folder_delete($id)
    {
        $folder = Folder::find($id);

        $folder->delete();

        return back()->with('success', 'Success! Deleted Record');
    }

 
    public function gallerydelete($id)
    {
        $gallery = Gallery::find($id);

        $gallery->delete();

        return back()->with('success', 'Success! Deleted Record');
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
