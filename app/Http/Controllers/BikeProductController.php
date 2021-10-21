<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varient;
use App\Models\Category;
use App\Models\Bikemodel;
use App\Models\Product;
use App\Models\Specname;
use App\Models\Spec;

use DB;


class BikeProductController extends Controller
{
    public function index(){
        $category = Category::all();
        $model = Bikemodel::all();
        $varient = Varient::all();
        $product = Product::all();
    return view('bike.index')->with('category',$category)->with('model',$model)->with('varient',$varient)->with('product',$product);
}

public function create(){    
        $category = Category::all();
        $model = Bikemodel::all();
        $varient = Varient::all();
        $product = Product::all();
    return view('bike.create')->with('category',$category)->with('model',$model)->with('varient',$varient)->with('product',$product);
}


    public function store(Request $request){
        // dd($request->all());
        $product = new Product;
        $product->name = $request->input('name');
        $product->about_bike = $request->input('about_bike');
        $product->category_id= $request->input('category_id');
        $product->bikemodel_id= $request->input('bikemodel_id');
        $product->varient_id= $request->input('varient_id');
        $product->price = $request->input('price');
        $product->route = $request->input('route');
        $product-> description= $request->input('description');
        $product->save();
        return redirect('/bike.index')->with('success', 'Data Added Successfully');        
    }

    public function edit($id)
    {          
        $product = Product::findOrFail($id);
        $varient = Varient::all(); 
        $category = Category::all();
        $model = Bikemodel::all();
        return view('bike.edit',compact('product','varient','model','category'));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->about_bike = $request->input('about_bike');
        $product->category_id= $request->input('category_id');
        $product->bikemodel_id= $request->input('bikemodel_id');
        $product->varient_id= $request->input('varient_id');
        $product->price = $request->input('price');
        $product->route = $request->input('route');
        $product-> description= $request->input('description');
        $product->update( );
        return redirect('/bike.index')->with('success', 'Data Added Successfully'); 

    }

     public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/bike.index')->with('success', 'Data Deleted Successfully'); 
    }

  
    public function getspecification($id){
        $product_id = $id;        
        $spectable = DB::table('specnames')->join('specs','specnames.id','=','specs.specname_id')
        ->where('specs.product_id',$product_id)->get();
        // print("<pre>");print_r($spectable);die;  
        $specifications = DB::table('specnames')->select('id','specname')->get();
        $specname = DB::table('specs')
                        ->select('specs.id as speval_id','specs.specname_id','specs.value')->join('specnames','specnames.id','=','specs.specname_id')
            ->where('specs.product_id',$product_id)->get();
        if(count($spectable) == 0){
            // $specifications = DB::table('specnames')->select('id','specname')->get();
            // Specname::all(); 
            $page_type= "add";
        }


        else{
            
            // $specname = $spectable;
            $page_type= "edit";
        }
        // dd($page_type);
// 
        $specification_fields = [];

        foreach($specifications as $key=>$spec)
        {
            $specification_fields[$key]['specid']  = $spec->id;
            $specification_fields[$key]['specname']  = $spec->specname;

            foreach($specname as $specvalues){
                if($spec->id == $specvalues->specname_id){
                    $specification_fields[$key]['speval_id'] = $specvalues->speval_id;
                    $specification_fields[$key]['value'] = $specvalues->value;
                }
            }
        }
        
        // print("<pre>");print_r($specification_fields);die;   

            
    return view('bike.spec' ,['product_id' => $product_id,'specification_fields' => $specification_fields , 'page_type' =>$page_type]);
    }
    
}