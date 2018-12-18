<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB; 

use Auth;
use App\Foods;

class AdminController extends Controller
{
	public function __construct()
    {
       // return 'hello';
    }

    public function user1()
    {
    	return view('Admin.users');
    }

    public function orders()
    {
    	return view('Admin.orders');
    }
    public function fooditems()
    {
        $food = DB::table('foods')->get();
 
    	return view('Admin.foods',['foods' => $food]);
    }

    public function addfood()
    {
    	return view('Admin.add_food');
    }

    public function dashboard()
    {
        return view('home');
    }
    public function foodadd(Request $request)
    {
        $this->validate($request,[

            'code' => 'required|unique:foods',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'gst' => 'required|integer',
            'image' => 'required'
        ]);

        $foods = new Foods;

        $foods->code = $request->input('code');
        $foods->name = $request->input('name');
        $foods->description = $request->input('description');
        $foods->price = $request->input('price');
        $foods->gst = $request->input('gst');

        $foods->image = $request->input('image');
        if(isset($foods->image) or strlen($foods->image) > 0)
        {
                if(Input::hasFile('image'))
                {
                    $file = Input::file('image');
                    $file->move(public_path().'/uploads/',$file->getClientOriginalName());
                    $url = URL::to("/").'/uploads/'.$file->getClientOriginalName();
                }
                $foods->image = $url;
        }
        $foods->save();
        return redirect('/addfoodpage')->with('response','Food Added Successfully');
    }

    public function food_edit($id)
    {
        $edit_food = DB::table('foods')->where('id', $id)->get();
        return view('Admin.edit_food',['editfoods' => $edit_food]);

    }

    public function update_biryani()
    {
        $this->validate($request,[

            'code' => 'required|unique:foods',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'gst' => 'required|integer',
        ]);


        // $updateDetails=array(
        //                         'island_group_id' => $request->get('island_group_id')
        //                         'region_id'       => $request->get('region_id')
        //                     );

        //                        DB::table('area')
        //                         ->where('id', $request->get('area_id'))
        //                         ->update($updateDetails);




        $foods = new Foods;

        $foods->code = $request->input('code');
        $foods->name = $request->input('name');
        $foods->description = $request->input('description');
        $foods->price = $request->input('price');
        $foods->gst = $request->input('gst');

        $foods->image = $request->input('image');
        if(isset($foods->image) or strlen($foods->image) > 0)
        {
                if(Input::hasFile('image'))
                {
                    $file = Input::file('image');
                    $file->move(public_path().'/uploads/',$file->getClientOriginalName());
                    $url = URL::to("/").'/uploads/'.$file->getClientOriginalName();
                }
                $foods->image = $url;
        }
        $foods->save();
        return redirect('/addfoodpage')->with('response','Food Added Successfully');
    }

   
}
