<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bloodgroup;
use App\Models\District;
use App\Models\Divition;
use App\Models\Registration;
use Illuminate\Http\Request;
use Image;
use Str;

class AlldonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allblooddoners = Registration::all();
        // dd($allblooddoners);
        return view('admin.all_doner.index', compact('allblooddoners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singledoner = Registration::find($id)->first();
        return view('admin.all_doner.view', compact('singledoner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdoner = Registration::find($id);
        $bloodgps = Bloodgroup::all();
        $divitions = Divition::all();
        $districts = District::all();
        return view('admin.all_doner.edit', compact('editdoner', 'bloodgps', 'divitions', 'districts'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $register = Registration::where('id', $id)->first();

        $register->name = request('name') ?? $register->name;
        $register->social_link = request('social_link') ?? $register->social_link;
        $register->email = request('email') ?? $register->email;
        $register->phone = request('phone') ?? $register->phone;
        $register->address = request('address') ?? $register->address;
        $register->divition_id = request('divition_id') ?? $register->divition_id;
        $register->district_id = request('district_id') ?? $register->district_id;
        $register->station_id = 1;
        $register->bloodgroup_id = request('bloodgp_id') ?? $register->bloodgroup_id;
        $register->donate_status = request('donate_status') ?? $register->donate_status;
        $register->gender = request('gender') ?? $register->gender;


        if (request()->has('image')) {
            $image = request()->file('image');
            $image_url = 'upload/alldoner/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save($image_url, 80);
//            $image = $image_url;
            $register->image = $image_url;
        }


        // dd($register);
        $register->update();
        return response()->json([
            'status' => 'Done'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registration::find($id)->delete();
        return response()->json([
            'status' => 'done'
        ]);
    }

    public function get_doner(){

        $getdoner = Registration::where('status',1)->take(10)->get();
        $donercount = $getdoner->count();
        return response()->json([
            'getdoner' => $getdoner,
            'donercount' =>$donercount
        ]);
    }
    public function seen_doner($id){

        $doners = Registration::where('id',$id)->first();
        $doners->status = 0;
        $doners->update();
        return response()->json([
            'msg' =>'successfully update'
           
        ]);
    }

    public function search_doner(){
        $searchdoner = Registration::where('name','like', '%' . request('search') . '%')
        ->orWhere('email','like', '%' . request('search') . '%')
        ->orWhere('phone','like', '%' . request('search') . '%')
        ->orWhere('address','like', '%' . request('search') . '%')
        ->get();
        return response()->json([
            'searchdoner' => $searchdoner
        ]);
    }


}
