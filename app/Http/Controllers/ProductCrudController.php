<?php

namespace App\Http\Controllers;

use App\Models\ProductCrud;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductCrudController extends Controller
{
    public function showData(){
        $products = ProductCrud::all();
        return view('show_product', compact('products'));
    }
    public function addData(){
        return view('add_product');
    }

    public function storeData(Request $request){
        $rules = [
            'title' => 'required|max:60',
            'description' => 'required|max:150',
        ];

        $this->validate($request ,$rules);

        $crud = new ProductCrud;
        $crud->title = $request->title;
        $crud->description = $request->description;
        $crud->save();

        Session::flash('msg', 'Data saved successfully');
        return redirect()->back();
      
    }

    public function editData($id=null){
        $editData = ProductCrud::find($id);

        return view('edit_product', compact('editData'));
    }
}
