<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Herosection; 
use Illuminate\Support\Facades\DB;

class HerosectionController extends Controller
{
    public function herotext(Request $request){
        if($request->isMethod('post')){
            $input = $request->all();
            unset($input['_token']);            
                if(!empty($input['bannerimg'])){
                    $imageName = time().'.'.$request->bannerimg->extension();  
                    $request->bannerimg->move(public_path('Herosection'), $imageName);
                    $input['bannerimg']=$imageName;
                }
                Herosection::insert($input);
                return redirect()->route('hero.index')->with('success','Successfully Added !');
            }
        else{
            return view('herosection.index' );
        }
    }
    public function heroview(){
        $data = DB::table('herosection')->get();
        return view('herosection.view', compact('data'));
    }
}
