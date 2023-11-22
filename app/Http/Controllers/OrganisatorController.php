<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisator;

class OrganisatorController extends Controller
{
    public function index(){
      
        return Organisator::all();
    }

    public function show($id){
        $organisator = response()->json(Organisator::find($id));
        return $organisator;
    }

    public function store(Request $request){
        $organisator = new Organisator();
        $organisator->name = $request->name;
        $organisator->description= $request->description;
      
        $organisator->save();
    }

    public function update(Request $request, $id){
        $organisator = Organisator::find($id);
        $organisator->name = $request->name;
        $organisator->description= $request->description;

        $organisator->save();
    }

    public function destroy($id){
       Organisator::find($id)->delete();
    }
}

