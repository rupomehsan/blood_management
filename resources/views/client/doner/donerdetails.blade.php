@extends('layouts.index')
@section('content')
<div class=" register view-doner">
    <div class="row container">
        <div class="col-md-3 col-xs-12 col-sm-12 register-left">
            <h3 class="top-border">Image</h3>
              <td>
                

                 
                   <img src="{{asset('client')}}/images/avatarmale.jpg"/>

            
                </td> 

                <button type="btn" ><a href="{{route('website.alldoner')}}" style="color: white;border:1px solid white;padding:10px;">ALL DONER</a></button>
                <button type="btn" ><a href="{{route('website.registration')}}" style="color: white;border:1px solid white;padding:10px;">REGISTRASION</a></button>


        </div>
        <div class="col-md-9 col-xs-12 ">


        <h3 style="color:white;text-transform: capitalize;text-align: center;">“Doner information detailse.”</h3><br/>
       <div class="register-table">
           

    <table class="table">
        <tr>
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
            <td>
                {{$singledoner->phone}}
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td>{{$singledoner->address}}</td>
        </tr>
         <tr>
            <td>Social links</td>
            <td>:</td>
            <td>
                {{$singledoner->social_link}}
           
            </td>
            
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
            <td>Donate status(Donate before?)</td>
            <td>:</td>
             <td>{{$singledoner->donate_status}}</td>
        </tr>

        <tr>
            <td>Registration Time</td>
            <td>:</td>
            <td>{{$singledoner->created_at->format('d/m/Y')}}</td>
        </tr>
    </table>
</div>
    </div>

</div>
</div>

@endsection