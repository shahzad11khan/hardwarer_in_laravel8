<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Customer;
use DB;
class HomeController extends Controller
{
    //
    public function redirect(Request $request)
    {
        # code...
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                // $categories=Category::all();
                $search = $request->input('query');
                $categories=Category::where('name','Like','%'.$search.'%')->get();
                return view('user.home',compact('categories'));
                // $categories=Category::whereNull('category_id')->get();
                // return view('user.home', compact('categories'));
                // return view('user.home');
            }
            else{

                $categories=Category::whereNull('category_id')->get();
                return view('admin.category.home', compact('categories'));
                // return view('user.category.home', compact('categories'));
                
                // return view('admin.category.home');
                

            }
        }else{
             return redirect()->back();
        }
    }
    public function search(Request $request)
    {
        # code...
        // dd("i m here");
        // exit();
        // $search = $request->input('query');
        // $search_text=$_Get['query'];
        // $categories=Category::where('name','Like','%'.$search.'%')->get();
        // return view('user.home',compact('categories'));

    }

    public function list()
    {
        # code...
        return view('admin.category.list');
    }

    public function store(Request $request)
    {
        //
       $data=array(
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'Quantity'=>$request->Quantity,
            'unit'=>$request->unit,
            
        );

        // echo "<pre>";
        // print_r($data);
        // exit;

        // dd($data);
        $create=Category::create($data);
        // dd($data);
        return redirect()->back();
        // return redirect()->route('admin.create');
    }


    public function listview(Request $request)
    {
        # code...
        // $abc =  "i am here";exit;
        
        $search = $request->input('query');
        $categories=Category::where('name','Like','%'.$search.'%')->paginate(10);
           return view('admin.category.list',compact('categories'));
        //    return view('admin.category.home',compact('abc'));
    }

    public function edit(Request $request,Category $category)
    {
        # code...
        $id = $category->id;
        // dd($id);
        $category = Category::find($id);
        // dd($category);
        $categories = Category::whereNull('category_id')->get();
        // dd($categories);
        return view('admin.category.edit',compact('categories','category'));
        
    }
    public function update(Request $request,Category $category)
    {
        $category->update($request->all());
        // $input
        // dd('hi');
         $id = $category->id;
        // dd($id);
        $data = array(
            'name'=>$category->name,
            'category_id'=>$category->category_id,
            'Quantity'=>$category->Quantity,
            'unit'=>$category->unit,


        );
        $category = Category::find($id);
        //  dd($category);
        $category->update($data);
        return redirect()->back();
        // return redirect()->route('admin.category.list');
    }
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->back();
        // return redirect()->route('category.index');
        
    }
//user side
    public function uedit(Request $request,$id)
    {
        //  just mint  now continue pukhto ke lka
        // hhhhhhhh
        // ?? jur ka update funtion jani
        $category = Category::find($id);
        $categories = Category::whereNull('category_id')->get();
        // dd($categories);
        return view('user.category.uedit',compact('categories','category'));
        // dd($id);
        // return view('user.category.uedit',compact('category'));
        
    }
    public function uupdate(Request $request, $id)
    {
    //    dd($id);
        $category = Category::find($id);
        // // dd($category);
        $category->Quantity=$request->Quantity;
        // $category->CustomerName = $request->CustomerName;
        $category->minussq = $request->minussq;
        $category->salestotalprice = $request->salestotalprice;
        $category->salequantity = $request->salequantity;

        
      
        // dd($category);
      
        $category->save();
       
        DB::table('customers')->insert(
            array(
                  'CustomerName' => $request->CustomerName,
                  'name' =>$request->name,
                  'category_id'=> $request->category_id,
                  'Quantity'=>$request->Quantity,
                  'unit'=>$request->unit,
                  'salestotalprice'=>$request->salestotalprice,
                  'minussq'=>$request->minussq,
                  'date'=>$request->date,
                  )
        );
        
        // dd("i m here to see you");

        return redirect()->back();
        //check ka us
        
    }

    public function customer(Request $request)
    {
        # code...
        // $abc =  "i am here";exit;
        $search = $request->input('query');


          $DATA=Customer::where('CustomerName','Like','%'.$search.'%')->paginate(10);
           return view('user.category.listt',compact('DATA'));
        //    return view('admin.category.home',compact('abc'));
    }


}
