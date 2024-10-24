<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function index()
    {
        $youtubes = Youtube::all();
        return view('frontend.youtube.view', compact('youtubes'));
    }

    public function create()
    {
        return view('frontend.youtube.creation');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
        'tittle' => ['required'],
        'status' => ['required'],
        'link' => ['required', 'regex:/^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/i'],
        ]);
        $youtube = Youtube::create($request->all());
        return redirect()->back()->with('success', 'youtube links created successfully.');
    }

    public function edit($id)
    {
        $youtube = Youtube::findOrFail($id);
        return view('frontend.youtube.edit', compact('youtube'));
    }

    public function update(Request $request, $id)
    {
        $youtube = Youtube::findOrFail($id);
        $youtube->update($request->all());
        return redirect()->back()->with('success', 'youtube links updated successfully.');
    }

    public function destroy($id)
    {
        $youtube = Youtube::findOrFail($id);
        $youtube->delete();
        return redirect()->back()->with('success', 'youtube links deleted successfully.');
    }
}
