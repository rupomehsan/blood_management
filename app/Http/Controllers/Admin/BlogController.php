<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Str;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'sub_title' => 'required',
            'desc' => 'required',
        ]);

        $image= request()->file('image');

        // if (!file_exists('uploads/products')) {
        //     $dir = mkdir('uploads/products');
        // }

        $blog = new Blog();
        $blog->title = request('title');
        $blog->sub_title = request('sub_title');
        $blog->desc = request('desc');
        if (request()->has('image')) {
            $image_url = 'upload/blogs/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save($image_url, 80);
            $blog->image = $image_url;
        }
        // dd($register);
        $blog->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogedit = Blog::where('id',$id)->first();
        return view('admin.blog.edit',compact('blogedit'));
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
        $blog = Blog::where('id',$id)->first();

        $blog->title = request('title') ?? $blog->title;
        $blog->sub_title = request('sub_title') ?? $blog->sub_title;
        $blog->desc = request('desc') ?? $blog->desc ;
        $image= request()->file('image');
        if (request()->has('image')) {
            $image_url = 'upload/blogs/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save($image_url, 80);
            $blog->image = $image_url;
        }
        // dd($register);
        $blog->update();
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
        try{
            $blog = Blog::find($id);

            if(file_exists($blog->image)){
                unlink($blog->image);
            }
            $blog->delete();
            return response()->json([
                'status' => 'done',
                'message' => 'Blog Deleted'
            ]);
        }catch(\Exception $e){
            return $e->getMessage();
        }

    }
}
