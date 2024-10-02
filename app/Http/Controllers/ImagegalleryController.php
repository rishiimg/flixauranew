<?php

namespace App\Http\Controllers;

use App\Models\imagegallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagegalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                        $imageName = uniqid().'.'.$file->extension();
                    $file->move(public_path('gallery'), $imageName);
                    $images[]=$imageName;          
                      }
            }
            imagegallery::insert( 
                     [  'image' =>  implode("|",$images),]
          );
            return redirect()->route('image.index')->with('success', 'Successfully Added !');
        } 
        else {
            return view('gallery.addimage');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(imagegallery $imagegallery)
    {
        $data = DB::table('imagegalleries')->get();
            // $collection = Blog::where('id',$id)->first();
        return view('gallery.image' , compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(imagegallery $imagegallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, imagegallery $imagegallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(imagegallery $imagegallery)
    {
        //
    }
}
