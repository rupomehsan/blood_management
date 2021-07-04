@extends('admin.layouts.index')
@section('content')
<div class=" register view-doner" style="margin-left: 17%;padding-top: 5%;margin-bottom: 20px;">
    <div class="row container">

        <button><a href="user-massage.php">ALL USER MASSAGES</a></button>
         <h4><i class="fa fa-angle-right"></i>User Massage Detailse</h4><hr><div class="col-md-9 msg-table">

 


    </div><table class="table table-striped table-advance table-hover">
        </table><table class="table">
        <tbody><tr>
            <td>First Name</td>
            <td>:</td>
            <td>{{$singlemssg->first_name}}</td>
        </tr>
        <tr>
            <td>Last name</td>
            <td>:</td>
            <td>{{$singlemssg->last_name}}
</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td>{{$singlemssg->phone}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{$singlemssg->email}}</td>
        </tr>
         <tr>
            <td>Massage</td>
            <td>:</td>
            <td>{{$singlemssg->opinion}}</td>
        </tr>
        
        <tr>
            <td>Send Time</td>
            <td>:</td>
            <td>{{$singlemssg->created_at->format('d/m/Y')}}</td>
        </tr>
    </tbody></table>
      <button><a href="reply-massage.php?action=reply&amp;id=42">REPLY MASSAGE</a></button>

    </div>

</div>
@endsection