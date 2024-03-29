<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class UsermessegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $contacts = Contact::paginate(10);
        return view('admin.all_messege.index',compact('contacts'));
    }

    public function get_message(){

        $contactmsg = Contact::where('status',1)->take(5)->get();
        $msgcount = $contactmsg->count();
        return response()->json([
            'contactmsg' => $contactmsg,
            'msgcount' =>$msgcount
        ]);
    }
    public function seen_message($id){

        $contactmsg = Contact::where('id',$id)->first();
        $contactmsg->status = 0;
        $contactmsg->update();
        return response()->json([
            'msg' =>'successfully update'
           
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $to_email = request('to_email');
       $from_email = request('from_email');
       $subject = request('subject');
       $message = request('message');

        if(Mail::to($to_email)->send(new SendMail($from_email, $subject, $message))){
            return response()->json([
                'status' => 'done',
                'message' => 'Reply Success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlemssg = Contact::find($id)->first();
        return view('admin.all_messege.view',compact('singlemssg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $replymssg = Contact::find($id)->first();
        return view('admin.all_messege.reply',compact('replymssg'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delitem = Contact::find($id)->delete();
        return  response()->json([
            'status' => 'done'
        ]);
    }

    public function search_message(){
        $searchdata = Contact::where('First_name','like', '%' . request('search') . '%')
        ->orWhere('last_name','like', '%' . request('search') . '%')
        ->orWhere('phone','like', '%' . request('search') . '%')
        ->orWhere('opinio','like', '%' . request('search') . '%')
        ->get();
        return response()->json([
            'searchdata' => $searchdata
        ]);
    }

}
