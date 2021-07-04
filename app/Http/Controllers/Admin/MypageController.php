<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Str;
use Image;

class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.mypage.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mypage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required|min:5',
            'desc' => 'required',
        ]);

        $image= request()->file('image');
        $pages = new Page();
        $pages->page_name = request('title');
        $pages->page_desc = request('desc');
        if (request()->has('image')) {
            $image_url = 'upload/pages/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save($image_url, 80);
            $pages->image = $image_url;
        }
        // dd($register);
        $pages->save();
        return response()->json([
            'status' => 'Done'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagedata = Page::find($id)->first(); 
        return view('admin.mypage.view',compact('pagedata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editpage = Page::find($id)->first();
        return view('admin.mypage.edit',compact('editpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pages = Page::where('id',$id)->first();
        $pages->page_name = request('title') ?? $pages->page_name;
        $pages->page_desc = request('desc') ??  $pages->page_desc;
        $image= request()->file('image');
        if (request()->has('image')) {
            $image_url = 'upload/pages/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save($image_url, 80);
            $pages->image = $image_url;
        }
        // dd($register);
        $pages->update();
        return response()->json([
            'status' => 'Done'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delitem = Page::find($id)->delete();
        return  response()->json([
            'status' => 'done'
        ]);
    }
}
