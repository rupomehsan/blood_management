<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Bloodgroup;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\District;
use App\Models\Divition;
use App\Models\Registration;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Str;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::take(2)->orderBy('id', 'desc')->get();
        return view('client.home.index', compact('blogs'));
    }

    public function registration()
    {
        $bloodgps = Bloodgroup::all();
        $divitions = Divition::all();
        return view('client.registration.index', compact('bloodgps', 'divitions'));
    }

    public function alldoner()
    {
        $divitions = Divition::all();
        $districts = District::all();
        $alldoners = Registration::paginate(10);
        return view('client.doner.index', compact('alldoners','divitions','districts'));
    }

    public function donerdetailse($id)
    {

        $singledoner = Registration::where('id', $id)->first();
        // dd($singledoner);
        return view('client.doner.donerdetails', compact('singledoner'));
    }

    public function blog()
    {
        $allblogs = Blog::all();
        return view('client.blog.index', compact('allblogs'));
    }

    public function singleblog($id)
    {
        $comments = Comment::where('blog_id', $id)->limit(5)->get();
        $singelblog = Blog::where('id', $id)->first();
        return view('client.blog.single', compact('singelblog', 'comments'));
    }


    public function get_district_by_divition_id($id)
    {
        $get_district = District::where('divition_id', $id)->get();

        return response()->json([
            'status' => 'done',
            'district' => $get_district
        ]);
    }

    public function get_station_by_district_id($id)
    {
        $get_station = Station::where('district_id', $id)->get();

        return response()->json([
            'status' => 'done',
            'station' => $get_station
        ]);
    }

    public function store()
    {
//        dd(request());

        $data = request()->validate([
            'name' => 'required|min:5',
            // 'email' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'bloodgp_id' => 'required',
            'divition_id' => 'required',
            'district_id' => 'required',
            'donate_status' => 'required',
            // 'image' => 'required'
        ]); 

        $image = request()->file('image');

        // if (!file_exists('uploads/products')) {
        //     $dir = mkdir('uploads/products');
        // }
        if (request()->has('image')) {
            $image_url = 'upload/alldoner/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save($image_url, 80);
            $image = $image_url;
        }
        $register = new Registration();
        $register->name = request('name');
        $register->social_link = request('social_link');
        $register->email = request('email');
        $register->phone = request('phone');
        $register->address = request('address');
        $register->divition_id = request('divition_id');
        $register->district_id = request('district_id');
        $register->station_id = 1;
        $register->bloodgroup_id = request('bloodgp_id');
        $register->donate_status = request('status');
        $register->gender = request('gender');
        $register->image = $image;

        // dd($register);
        $register->save();
        return response()->json([
            'status' => 'Done'
        ]);


    }


    public function contact()
    {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->first_name = request('first_name');
        $contact->last_name = request('last_name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->opinion = request('message');
        $contact->save();
        return response()->json([
            'status' => 'done',
            'message' => 'Contact send'
        ]);


    }

    public function femalenum($phone)
    {
        $result = substr($phone, 0, 4);
        $result .= "****";
        $result .= substr($phone, 7, 4);
        return $result;
    }

    public function comment()
    {
        $data = request()->validate([
            'name' => 'required',
            'last_name' => 'required',
            'comment' => 'required',
        ]);

        $comment = new Comment();
        $comment->blog_id = request('id');
        $comment->name = request('name');
        $comment->last_name = request('last_name');
        $comment->comments = request('comment');
        $comment->save();
        return response()->json([
            'status' => 'done'
        ]);
    }

    public function get_doner_by_divition_id($id){
        $srcDoner = Registration::where('divition_id',$id)->with(['divition','district','bloodgroup'])->get();

        // dd($srcDoner);
        return response()->json([
            'status' => 'ok',
            'srcDoner' => $srcDoner
        ]);
    }
    public function get_doner_by_district_id($id){
        $srcDoner = Registration::where('district_id',$id)->with(['divition','district','bloodgroup'])->get();

        return response()->json([
            'status' => 'ok',
            'srcDoner' => $srcDoner
        ]);
    }

   public $group_name;

   public function searchDoner(Request $request){
    //    $data = request()->validate([
    //        'search' => 'required',
    //        'divition_id' => 'required',
    //        'district_id' => 'required',
    //    ]);
    //    dd($request->all());

        $this->group_name = $request->search;
       $srcDoner = Registration::where('divition_id', $request->divition_id)
       ->where('district_id',  '=' ,$request->district_id)
    //    ->orwhere('name', 'like', '%' .$request->search )
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('bloodgroups')
                ->where('bloodgroups.name', 'LIKE', "%". $this->group_name. "%");
        })
        ->with(['divition','district','bloodgroup'])
    //    ->orWhere('phone', 'like', '%' . request('search') . '%')
    //    ->orWhere('email', 'like', '%' . request('search') . '%')
    //    ->orWhere('address', 'like', '%' . request('search') . '%')

       ->get();

    //    $this->size = (int) $request->size;
    //             $products = $main_category->related_products()->with([
    //                 'category',
    //                 'sub_category',
    //                 'main_category',
    //                 'color',
    //                 'image',
    //                 'publication',
    //                 'size',
    //                 'unit',
    //                 'writer',
    //             ])->whereExists(function ($query) {
    //                 $query->select(DB::raw(1))
    //                     ->from('product_size')
    //                     ->whereRaw('product_size.product_id = products.id')
    //                     ->where('product_size.size_id',$this->size);
    //             })->orderBy('id', 'DESC')->paginate(16);

       
       
       return response()->json([
            'status' => 'ok',
            'srcDoner' => $srcDoner
       ]);

    //    return view('client.search.index', compact('posts'));
   }

}
