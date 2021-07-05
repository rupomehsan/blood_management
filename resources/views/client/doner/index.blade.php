@extends('layouts.index')
@section('content')
    <div id="home1"></div>

    <div class="register">
        <div class="all-doner-top container">
            <div>
                <h2 style="padding-left: 228px;display:inline-block;width:80%;color: white;color: white; font-size: 23px;text-transform: uppercase;text-align: center;margin-bottom: 40px;">
                    All blood doner list</h2>
                <button style="width:10%;"><a href="{{route('website.registration')}}" class="btn btn-success">Registration</a>
                </button>
            </div>


            <div class="col-md-12 col-xs-12 mb-20">
                <form method="GET" action="search-doner">

                    <div class="form-group dvsn-btn" style="width: 30%; display: inline-block;">
                        <select class="form-control" id="divition_id">
                            <option class="" value="">Division</option>
                            @foreach ($divitions as $divition)
                            <option class="" value="{{$divition->id}}">{{$divition->name}}</option>
                            @endforeach
                           
                        </select>
                    </div>
                    <div class="form-group dvsn-btn" style="width: 30%; display: inline-block;">
                        <select class="form-control" id="district_id">
                            <option class="" value="">District</option>
                        </select>
                    </div>


                    <input type="text" id="search" placeholder="Search.....">
                    {{-- <button type="submit"><i class="fa fa-search"></i></button> --}}


                </form>
            </div>

        </div>


        <div class="all-doner container pb-20" style="overflow-x:auto; overflow: scroll;height: 800px;">


            <table>
                <tr>
                    <th>Id</th>
                    <th class="name">Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Blood Group</th>
                    <th>Division</th>
                    <th>District</th>
                    <th>View Detailse</th>
                </tr>

                <tbody id="tableBody">

                @if(count($alldoners))
                    @foreach ($alldoners as $alldoner)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$alldoner->name}}</td>
                            <td>@if ($alldoner->gender == 'Female')
                                    {{$alldoner->femaleNumber()}}
                                @else
                                    {{$alldoner->phone}}
                                @endif
                            </td>
                            <td>{{$alldoner->email}}</td>
                            <td>{{$alldoner->address}}</td>
                            <td>{{$alldoner->bloodgroup->name}}</td>
                            <td>{{$alldoner->divition->name}}</td>
                            <td>{{$alldoner->district->name}}</td>
                            <td>
                                <a href="{{url('blood-doner-detailse',$alldoner->id)}}">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <td colspan="5" class="alert alert-danger">Data Is Not Found</td>
                @endif

                </tbody>
            </table>


        </div>


        <div class="demo">
            <nav class="pagination-outer" aria-label="Page navigation">
                <ul class="pagination">

                    {{$alldoners->links()}}

                </ul>
            </nav>
        </div>


        <h3 class="notice"><span>[***]Notice:</span> female number only for emergency service.if you want to emergency
            service you can contact with admin...</h3>


@endsection
@section('custom_js')
    <script>
            $('#divition_id').change(function () {
                var divition_id = $('#divition_id').val()
              

                $.ajax({
                    url: '{{url('api/get-district')}}/' + divition_id,
                    method: 'get',
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if (res.status == 'done') {
                            $('#district_id').empty()
                            $('#district_id').append(`
                        <option disabled selected>Select Your District</option>
                        `)
                            res.district.forEach(function (item) {
                                $('#district_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                            })
                        }
                    },
                    error: function (err) {
                        console.log(error)
                    }
                })
            })

            $('#divition_id').change(function () {
                var divition_id = $('#divition_id').val()

                $.ajax({
                    url: '{{url('all-blood-doner/divition')}}/' + divition_id,
                    method: 'get',
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if(res.status == 'ok'){
                            $('#tableBody').empty()
                            res.srcDoner.forEach(function(item){
                                $('#tableBody').append(`
                                <tr>
                                    <td>1</td>
                                    <td>${item.name}</td>
                                    <td>${item.phone}</td>
                                    <td>${item.email}</td>
                                    <td>${item.address}</td>
                                    <td>${item.bloodgroup_id}</td>
                                    <td>${item.divition_id}</td>
                                    <td>${item.district_id}</td>
                                    <td>
                                        <a href="{{url('blood-doner-detailse',$alldoner->id)}}">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    </td>
                                 </tr>
                                `)
                            })
                        }
                    },
                    error: function (err) {
                        console.log(error)
                    }
                })
            })

            $('#district_id').change(function () {
                var district_id = $('#district_id').val()

                $.ajax({
                    url: '{{url('all-blood-doner/district')}}/' + district_id,
                    method: 'get',
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if(res.status == 'ok'){
                            $('#tableBody').empty()
                            res.srcDoner.forEach(function(item){
                                $('#tableBody').append(`
                                <tr>
                                    <td>1</td>
                                    <td>${item.name}</td>
                                    <td>${item.phone}</td>
                                    <td>${item.email}</td>
                                    <td>${item.address}</td>
                                    <td>${item.bloodgroup_id}</td>
                                    <td>${item.divition_id}</td>
                                    <td>${item.district_id}</td>
                                    <td>
                                        <a href="{{url('blood-doner-detailse',$alldoner->id)}}">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    </td>
                                 </tr>
                                `)
                            })
                        }
                    },
                    error: function (err) {
                        console.log(error)
                    }
                })
            })

            $('#search').keyup(function(){
                var search = $('#search').val()

                $.ajax({
                    url: '{{url('all-blood-doner/search')}}',
                    method: 'get',
                    data :{
                        'search' : search,
                    },
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if(res.status == 'ok'){
                            $('#tableBody').empty()
                            res.srcDoner.forEach(function(item){
                                $('#tableBody').append(`
                                <tr>
                                    <td>1</td>
                                    <td>${item.name}</td>
                                    <td>${item.phone}</td>
                                    <td>${item.email}</td>
                                    <td>${item.address}</td>
                                    <td>${item.bloodgroup_id}</td>
                                    <td>${item.divition_id}</td>
                                    <td>${item.district_id}</td>
                                    <td>
                                        <a href="{{url('blood-doner-detailse',$alldoner->id)}}">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                    </td>
                                 </tr>
                                `)
                            })
                        }
                    },
                    error: function (err) {
                        console.log(error)
                    }
                })
                
            })

    </script>
@endsection
