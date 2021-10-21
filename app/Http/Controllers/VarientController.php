<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bikemodel;
use App\Models\Category;
use App\Models\Varient;



class VarientController extends Controller
{
    public function index(){
        $category = Category::all();
        $model = Bikemodel::all();
        $varient = Varient::all();
        return view('varient.index')->with('category',$category)->with('model',$model)->with('varient',$varient);
    }

    public function create(){
        $category = Category::all();
        $model = Bikemodel::all();
        $varient = Varient::all();
        return view('varient.create')->with('category',$category)->with('model',$model)->with('varient',$varient);
    }
    
    public function store(Request $request){
        $varient = new Varient;
        $varient->category_id = $request->input('category_id');
        $varient->bikemodel_id= $request->input('bikemodel_id');
        $varient->title= $request->input('title');
        $varient-> description= $request->input('description');
        $varient->save();
        return redirect('/varient.index')->with('success', 'Data Added Successfully');       
    }

    public function edit($id){
        $varient = Varient::find($id); 
        $category = Category::all();
        $model = Bikemodel::all();
        return view('varient.edit')->with('varient',$varient)->with('model',$model)->with('category',$category);
    }

    public function update(Request $request, Varient $varient){
        // dd($varient);
        // $varient = Varient::find($);        
        $varient->category_id = $request->category_id;
        $varient->bikemodel_id= $request->bikemodel_id;
        $varient->title= $request->title;
        $varient-> description= $request->description;
        $varient->save();
        return redirect('/varient.index')->with('success', 'Data Added Successfully');       
    }

    public function delete($id){
        $varient = Varient::findOrFail($id);
        $varient->delete();
        return redirect('/varient.index')->with('success', 'Data Deleted Successfully');    
    }
}
