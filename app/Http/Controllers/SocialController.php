<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SocialController extends Controller
{
  public function index()
  {
    $socials = Social::all();
    $count = count($socials);
    return view('socials.viewsocial', compact('socials','count'));
  }

  public function create()
  {
    return view('socials.createsocial');
  }

  public function store(Request $request)
  {
    $validator = $request->validate([
      'instaUrl' => ['required'],
      'facebookUrl' => ['required'],
      'twitterUrl' => ['required'],
      'emailUrl' => ['required'],
    ]);
    $count = Social::count();
    if ($count >= 1) {
      return redirect()->back()->with('error', 'Request already exist.');
    }
    $socials = Social::create($request->all());
    return redirect()->back()->with('success', 'social links created successfully.');
  }

  public function edit($id)
  {
    $social = Social::findOrFail($id);
    return view('socials.editsocial', compact('social'));
  }

  public function update(Request $request, $id)
  {
    $social = Social::findOrFail($id);
    $social->update($request->all());
    return redirect()->back()->with('success', 'social links updated successfully.');
  }

  public function destroy($id)
  {
    $social = Social::findOrFail($id);
    $social->delete();
    return redirect()->back()->with('success', 'socials deleted successfully.');
  }
}
