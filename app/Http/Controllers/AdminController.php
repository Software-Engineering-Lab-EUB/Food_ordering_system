<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;

use PhpParser\Node\Expr\FuncCall;





class AdminController extends Controller
{
    public function view_catagory()
    {
        $data=category::all();
        return view('admin.catagory',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->catagory;
        $data->save();
        return redirect()->back()->with('message', 'Category added successfully');


        
    
        // Create and save the category
        
       
        
    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function view_menu()
    {
        $category=category::all();
        return view('admin.menu',compact('category'));
    }
    public function add_menu(Request $request)
    {
        $menu = new Menu;
        $menu->title = $request->title;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->discount_price = $request->discount_price;
        $menu->quantity = $request->quantity;
        $menu->category = $request->category;
    
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('menu', $imagename);
        $menu->image = $imagename;
    
        $menu->save();
    
        return redirect()->back()->with('message', 'Menu added successfully');
    }
    public function show_menu()
    {
       $menu=menu::all();
        return view('admin.show_menu',compact('menu'));
    }
    public function delete_menu($id)
    {
        $menu = Menu::find($id);  // Corrected this line
        $menu->delete();
        return redirect()->back()->with('message', 'Menu Deleted Successfully');
    }
    public function update_menu($id)
    {
        $menu = Menu::find($id); 
       $category=category::all();

        return view('admin.update_menu',compact('menu','category'));
      
    }
    
    public function update_menu_confirm(Request $request , $id)
    {
        $menu = Menu::find($id); 
        $menu->title = $request->title;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->discount_price = $request->discount_price;
        $menu->quantity = $request->quantity;
        $menu->category = $request->category;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('menu',$imagename);
        $menu->image = $imagename;
        $menu->save();
    

    
        return redirect()->back()->with('message', 'Menu Updated Successfully');;
      
    }




    public function order()
    {
        $order=order::all();
        return view ('admin.order',compact('order'));
    }



    public function delivered($id)
    {
        $order=order::find($id);
        $order->delivery_status='delivered';
        $order->payment_status='paid';

        $order->save();
        return redirect()->back();
    }
    
    public function search(Request $request)
{
    $searchText = $request->search;

    $order = Order::where(function($query) use ($searchText) {
        $query->where('name', 'LIKE', "%{$searchText}%")
              ->orWhere('phone', 'LIKE', "%{$searchText}%")
              ->orWhere('address', 'LIKE', "%{$searchText}%")
              ->orWhere('email', 'LIKE', "%{$searchText}%");
    })->get();
    

    return view('admin.order', compact('order'));
}

}
