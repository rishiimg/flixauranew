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
            $request->validate([
                'image' => 'required',
            ]);
            $input = $request->all();
            unset($input['_token']);
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $imageName = uniqid() . '.' . $file->extension();
                    $file->move(public_path('gallery'), $imageName);
                    $images[] = $imageName;
                }
            }
            imagegallery::insert(
                ['image' =>  implode("|", $images),]
            );
            return redirect()->route('image.index')->with('success', 'Successfully Added !');
        } else {
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
        return view('gallery.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(imagegallery $imagegallery, $id)
    {
        $images = imagegallery::findOrFail($id);
        return view('gallery.edit', compact('images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = imagegallery::findOrFail($id);

        // Initialize images array with existing image
        $images = explode("|", $data->image);

        // Get all request data except the token
        $input = $request->all();
        unset($input['_token']);

        // Check if there are uploaded files
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $imageName = uniqid() . '.' . $file->extension();
                $file->move(public_path('gallery'), $imageName);
                $images[] = $imageName;
            }
        }

        // Update the record with the new image data
        $data->update([
            'image' => implode("|", $images),
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(imagegallery $imagegallery, $id)
    {
        $images = imagegallery::findOrFail($id);
        $images->delete();
        return redirect()->back()->with('success', 'data deleted successfully.');
    }
}
