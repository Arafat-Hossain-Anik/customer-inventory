<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Toastr;
use Session;

class ProductsController extends Controller
{
    public function showData(){
        $products = Products::latest()->Paginate(8);
       return view('auth.crud.show_data',compact('products'));
   }

   public function addData(){
       return view('auth.crud.add_data');
   }

   public function storeData(Request $request){
       if($request->isMethod('post')){
           $data = $request->all();

           $rules = [
               'Name'=>'required',
               'Quantity'=>'required',
               'Price'=>'required',
           ];
           $this->validate($request,$rules);

           $product = new Products();
           $product->Name = $data['Name'];
           $product->Quantity = $data['Quantity'];
           $product->Price = $data['Price'];
           $product->save();
        Session::flash('msg','Data Added Successfully');
           return redirect('/show-data');
       }
   }

   // edit data
   public function editData($id =null){
    // return $id;
       $products = Products::find($id);
       return view('auth.crud.update_data',compact('products'));
   }

   public function storeEditData(Request $request,$id){
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'Name'=>'required',
                'Quantity'=>'required',
                'Price'=>'required',
            ];
            $this->validate($request,$rules);

            $products = Products::find($id);
            $products->Name = $data['Name'];
            $products->Quantity = $data['Quantity'];
            $products->Price = $data['Price'];
            $products->save();
            Session::flash('msg','Data Update Successfully');
            return redirect('/show-data');
        }
    }

    //delete data
    public function deleteData($id=null){
        Products::findOrFail($id)->delete();
        Session::flash('msg','Data Deleted Successfully');
            return redirect()->back();
    }
}
