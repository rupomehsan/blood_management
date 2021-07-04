@extends('admin.layouts.index')
@section('content')
<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;padding-bottom:6%;">
    <div class="row container">

        <button><a href="all-doner.php">ALL BLOOD DONER</a></button>
         <h4><i class="fa fa-angle-right"></i>BLOOD DONER Detailse</h4><hr><div class="col-md-9 msg-table">
  
      <center>
        <div class="pages bold">
            <h2 class="font-weight-bold">{{$pagedata->page_name}}</h2>
            <hr>
            <p>{{$pagedata->page_desc}}</p>
        </div>
      </center>
         
     



</div>
@endsection