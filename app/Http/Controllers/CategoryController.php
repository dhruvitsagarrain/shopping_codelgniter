<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Validator;
use DB;
class CategoryController extends Controller
{
   public function create_category()
   {
      return view ('create_category');
   }
   public function create(request $request)
   {
        $rules = [
            'category' => 'required|string|min:2|max:255',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect('create_category')
            ->withInput()
            ->withErrors($validator);
        }
        else{
            $data = $request->input();
            try{
                $category = new category();
                $category->category = $data['category'];
                $category->save();
                return redirect('view_category')->with('status',"Insert Data successfully");
            }
            catch(Exception $e){
                return redirect('create_category')->with('failed',"Operation failed");
            }
        }
    
   }
   public function display()
   {
        $category =  DB::select('select * from category');
        return view('viewcategory', ['category' => $category]);
   }
   public function edit_category(request $request,$id)
   {
        $category = category::find($id);
        return view('editcategory', ['category' => $category]); 
   }
   public function update_category(request $request,$id)
   {
            $data = $request->input(); 
            $category = category::find($id);
            $category->category = $data['category'];
            $category->save();
            return redirect('view_category')->with('success',"updated Category Successfully");
   }
   public function delete_category($id)
   {
        $category = category::find($id);
        $category->delete(); // Easy right?
 
        return redirect('/view_category')->with('success', 'Category remove Successfully.');
   }
}
