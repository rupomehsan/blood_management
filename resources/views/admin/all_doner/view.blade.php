@extends('admin.layouts.index')
@section('content')
<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;padding-bottom:6%;">
    <div class="row container">

        <button><a href="all-doner.php">ALL BLOOD DONER</a></button>
         <h4><i class="fa fa-angle-right"></i>BLOOD DONER Detailse</h4><hr><div class="col-md-9 msg-table">
    </div><table class="table table-striped table-advance table-hover">
        </table><table class="table">
        <tbody><tr>
            <td>Name</td>
            <td>:</td>
            <td>{{$singledoner->name}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{$singledoner->email}}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td>{{$singledoner->phone}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td>{{$singledoner->address}}</td>
        </tr>
         <tr>
            <td>Social links</td>
            <td>:</td>
            <td>{{$singledoner->socila_link}}</td>
        </tr>
         <tr>
            <td>Blood group</td>
            <td>:</td>
            <td>{{$singledoner->bloodgroup->name}}</td>
        </tr>
         <tr>
            <td>Gender</td>
            <td>:</td>
            <td>{{$singledoner->gender}}</td>
        </tr>
          <tr>
            <td>Division</td>
            <td>:</td>
            <td>{{$singledoner->divition->name}}</td>
        </tr>
        <tr>
            <td>District</td>
            <td>:</td>
            <td>{{$singledoner->district->name}}</td>
        </tr>
        <tr>
            <td>Station</td>
            <td>:</td>
            <td>{{$singledoner->station->name}}</td>
        </tr>
         <tr>
            <td>Donate status(Donate before?)</td>
            <td>:</td>
             <td>{{$singledoner->donate_status}}</td>
        </tr>
        <tr>
           <td>Image</td>
           <td>:</td>
             <td><img src="{{asset($singledoner->image)}}" height="50" width="100"></td>
       </tr>

        <tr>
            <td>Registration Time</td>
            <td>:</td>
            <td>{{$singledoner->created_at->format('d/m/y')}}</td>
        </tr>
    </tbody></table>

    </div>

</div>
@endsection