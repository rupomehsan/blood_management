@extends('admin.layouts.index')
@section('content')
    <div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
        <div class="row container">

            <button><a href="all-doner.php">ALL BLOOD DONER</a></button>
            <h4><i class="fa fa-angle-right"></i>UPDATE BLOOD DONER</h4>
            <hr>
            <div class="col-md-6">

                <form id="donerupdateForm" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="donerid" value="{{$editdoner->id}}">
                    <div class="form-group">
                        <h5 style="padding-bottom: 10px;">name: <span style="color:red;">*</span></h5>
                        <input type="text" class="form-control" id="name" name="name" value="{{$editdoner->name}}">
                    </div>
                    <div class="form-group">
                        <h5 style="padding-bottom: 10px;">email: <span style="color:red;">*</span></h5>
                        <input type="email" class="form-control" id="email" name="email" value="{{$editdoner->email}}">
                    </div>
                    <div class="form-group">
                        <h5 style="padding-bottom: 10px;">Phone: <span style="color:red;">*</span></h5>
                        <input type="text" minlength="11" maxlength="11" id="phone" name="phone" class="form-control"
                               value="{{$editdoner->phone}}">
                    </div>
                    <div class="form-group">
                        <h5 style="padding-bottom: 10px;">Address: <span style="color:red;">*</span></h5>
                        <input type="text" class="form-control" id="address" name="address"
                               value="{{$editdoner->address}}">
                    </div>

                    <h5 style="padding-bottom: 10px;">social <span style="color:red;">*</span></h5>
                    <div class="form-group">
                        <input type="text" class="form-control" id="social_link" name="social"
                               value="{{$editdoner->social_link}}">
                    </div>
                    <div class="form-group">
                        <h5 style="padding-bottom: 10px;">Blood Group : <span style="color:red;">*</span></h5>
                        <select class="form-control" id="bloodgp_id">
                            <option class="" value="">Blood group</option>
                            @foreach ($bloodgps as $bloodgp)
                                <option
                                    {{$editdoner->bloodgroup_id == $bloodgp->id ?'selected':''}} value="{{$bloodgp->id}}">{{$bloodgp->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <h5 style="padding-bottom: 10px;">Divsion: <span style="color:red;">*</span></h5>
                        <select class="form-control" id="divition_id">
                            <option class="" value="">Divition</option>
                            @foreach ($divitions as $divition)
                                <option
                                    {{$editdoner->divition_id == $divition->id? 'selected' :''}} value="{{$divition->id}}">{{$divition->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <h5 style="padding-bottom: 10px;">District: <span style="color:red;">*</span></h5>
                        <select class="form-control" id="district_id">
                            <option class="" value="">District</option>
                            @foreach ($districts as $district)
                                <option
                                    {{$editdoner->district_id == $district->id? 'selected' :''}} value="{{$district->id}}">{{$district->name}}</option>
                            @endforeach
                        </select>

                    </div>


                    <div class="form-group" style="padding-left: 10px;border:1px solid black;">
                        <h5>Are you donate before?</h5>
                        <div class="maxl">
                            <div class="col-md-6">
                                <label class="radio inline">
                                    <input {{$editdoner->donate_status === 'YES' ? 'checked':''}}  type="radio"
                                           name="status" value="YES">
                                    <span> YES </span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="radio inline">
                                    <input {{$editdoner->donate_status === 'NO' ? 'checked':''}} type="radio"
                                           name="status" value="NO">
                                    <span>NO </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="padding-left: 10px;">
                        <h5>Gender : - </h5>
                        <div class="maxl">
                            <div class="col-md-6">
                                <label class="radio inline">
                                    <input {{$editdoner->gender == 'Male' ? 'checked':''}} type="radio" name="gender"
                                           value="Male">
                                    <span> Male </span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="radio inline">
                                    <input {{$editdoner->gender == 'Female' ? 'checked':''}} type="radio" name="gender"
                                           value="Female">
                                    <span>Female </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="custom-file">
                        <h5 style="padding-bottom: 10px;">Image</h5>
                        <img src="{{asset($editdoner->image)}}" height="100" width="100">
                        <input type="file" class="custom-file-input" id="image" name="image"
                               value="{{$editdoner->image}}">
                        <label class="custom-file-label" for="customFile"></label>
                    </div>

                    <input type="submit" class="btnRegister" name="update" value="update">


                </form>


                @endsection

                @section('custom_js')
                    <script>
                        $(document).ready(function () {


                            var gender = null;
                            var status = null;
                            var image = null;

                            $('[name="gender"]').click(function () {
                                gender = $(this).val()
                            })

                            $('[name="status"]').click(function () {
                                status = $(this).val()
                            })


                            $('#image').change(function (e) {
                                image = e.target.files[0];
                            })

                            // $('#donerupdateForm').submit(function(e){
                            //     e.preventDefault()
                            //     var id = $('#donerid').val();
                            //     console.log(id);
                            // })

                            $('#donerupdateForm').submit(function (e) {
                                e.preventDefault()
                                $('.error').remove()
                                var id = $('#donerid').val()
                                var name = $('#name').val();
                                var email = $('#email').val();
                                var phone = $('#phone').val();
                                var social_link = $('#social_link').val();
                                var address = $('#address').val();
                                var bloodgp_id = $('#bloodgp_id').val();
                                var divition_id = $('#divition_id').val();
                                var district_id = $('#district_id').val();
                                var station_id = $('#station_id').val();

                                var Formdata = new FormData()
                                Formdata.append('_token', '{{csrf_token()}}')
                                Formdata.append('_method', 'PATCH')
                                Formdata.append('id', id)
                                Formdata.append('name', name)
                                Formdata.append('email', email)
                                Formdata.append('phone', phone)
                                Formdata.append('social_link', social_link)
                                Formdata.append('address', address)
                                Formdata.append('bloodgp_id', bloodgp_id)
                                Formdata.append('divition_id', divition_id)
                                Formdata.append('district_id', district_id)
                                Formdata.append('station_id', station_id)

                                if(gender !== null ){
                                    Formdata.append('gender', gender)
                                }
                                if(status !== null ){
                                    Formdata.append('donate_status', status)
                                }
                                if(image !== null){
                                    Formdata.append('image', image)
                                }

                                $.ajax({
                                    url: '{{url('backend/all-doners')}}/' + id,
                                    method: 'post',
                                    datatype: 'json',
                                    data: Formdata,
                                    processData: false,
                                    contentType: false,
                                    success: function (res) {
                                        if (res.status == 'Done') {
                                            Swal.fire({
                                                position: 'top-end',
                                                icon: 'success',
                                                title: 'Product Successfully Updated',
                                                showConfirmButton: false,
                                                timer: 1500
                                            })
                                            // $('#name').val('')
                                            // $('#email').val('')
                                            // $('#phone').val('')
                                            // $('#social_link').val('')
                                            // $('#address').val('')
                                            // $('#bloodgp_id').empty()
                                            // $('#divition_id').empty()
                                            // $('#district_id').empty()
                                            setTimeout(function () {
                                                window.location.reload(1);
                                            }, 1000);
                                        }
                                        console.log(res)
                                    },
                                    error: function (err) {
                                        if (err.responseJSON.errors) {

                                            var error = err.responseJSON.errors
                                            if (error.address) {
                                                $('#address').after('<div class="alert alert-danger error">Address  is required</div>')
                                            }
                                            if (error.divition_id) {
                                                $('#divition_id').after('<div class="alert alert-danger error">Dvition  is required</div>')
                                            }
                                            if (error.email) {
                                                $('#email').after('<div class="alert alert-danger error">Email  is required</div>')
                                            }
                                            if (error.name) {
                                                $('#name').after('<div class="alert alert-danger error">Name  is required</div>')
                                            }
                                            if (error.phone) {
                                                $('#phone').after('<div class="alert alert-danger error">phone  is required</div>')
                                            }
                                            if (error.bloodgp_id) {
                                                $('#bloodgp_id').after('<div class="alert alert-danger error">BloodGroup  is required</div>')
                                            }
                                            if (error.district_id) {
                                                $('#district_id').after('<div class="alert alert-danger error">District  is required</div>')
                                            }
                                            console.log(error)
                                        }

                                        console.log(err)
                                    }
                                })


                            })


                            $('#divition_id').change(function () {
                                var divition_id = $('#divition_id').val()
                                console.log(divition_id)
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

                            $('#district_id').change(function () {
                                var district_id = $('#district_id').val()

                                $.ajax({
                                    url: '{{url('api/get-station')}}/' + district_id,
                                    method: 'get',
                                    datatype: 'json',
                                    success: function (res) {
                                        console.log(res)
                                        if (res.status == 'done') {
                                            $('#station_id').empty()
                                            $('#station_id').append(`
                        <option value="">Select Your Station</option>
                        `)
                                            res.station.forEach(function (item) {
                                                $('#station_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                                            })
                                        }

                                    },
                                    error: function (err) {
                                        console.log(err)
                                    }
                                })
                            })


                        });

                    </script>
@endsection
