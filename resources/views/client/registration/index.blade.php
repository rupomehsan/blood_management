@extends('layouts.index')
@section('content')
<div id="home1"></div>
<div class="register pb-20">
            <div class="row">
                
                <div class="col-md-3 register-left">
                    <div class="hide-btn">
                         <button type="btn" ><a href="{{route('website.alldoner')}}" style="color: white;border:1px solid white;padding:10px;background: rgba(0, 0, 0, 0.6);">SEE ALL BLOOD DONOR</a></button>
                
                    </div>
                    <img src="{{asset('client')}}/images/blood.png" alt=""/>
                    <h3>Welcome To Donating Blood</h3><br/>
                    <h6 style="padding: 0px 10px;">“If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life.”</h6><br/>
                       <button type="btn" ><a href="{{route('website.alldoner')}}" style="color: white;border:1px solid white;padding:10px;background: rgba(0, 0, 0, 0.6);">SEE ALL BLOOD DONOR</a></button>
                </div>
                
                <div class="col-md-9 register-right">
                   

                         
  <h5 class="register-heading">[ "<span style="color:red;font-size: 30px;margin-top: 20px;"> * </span> " Field is must be required !!! ]</h5>
                                <h3 class="register-heading">Registrasion As A Donor</h3>

                            <div class="row register-form">
                                
                                <form id="registrationForm" action="" method="post" enctype="multipart/form-data"  name="myForm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <h5 style="padding-bottom: 10px;">Name : <span style="color:red;">*</span></h5>
                                           <input type="text" class="form-control" id="name" name="name" placeholder="Full Name *" value=""  />
                                        </div>
                                         <div class="form-group">
                                          <h5 style="padding-bottom: 10px;">Email : </h5>
                                          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email *" value="" />
                                        </div>
                                         <div class="form-group">
                                             <h5 style="padding-bottom: 10px;">Address : <span style="color:red;">*</span></h5>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address *" value=""  />
                                        </div>
                                        <div class="form-group">

                                             <h5 style="padding-bottom: 10px;">Blood Group : <span style="color:red;">*</span></h5>
                                             <select class="form-control" name="blood" id="bloodgp_id" >  
                                             <option value="">Select Your Blood group</option>
                                             @foreach ($bloodgps as $bloodgp)
                                             <option value="{{$bloodgp->id}}">{{$bloodgp->name}}</option>
                                             @endforeach
                                           

                                            </select>

                                         </div>

                                       
                                       <div class="form-group">
                                        
                                        <div class="maxl">
                                                <h5 style="color:green;margin-top:35px;">Are you donate before ? : <span style="color:red;">*</span></h5>
                                            
                                            <div class="col-md-6">
                                            <label class="radio inline" style="">
                                                <input  type="radio" name="status"  value="NO"  >
                                                <span>NO </span>
                                            </label>
                                             </div>
                                             <div class="col-md-6">
                                                <label class="radio inline">
                                                    <input type="radio" name="status"  value="YES" >
                                                    <span> YES </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <h5 style="padding-bottom: 10px;">Image : </h5>
                                            <input type="file" class="custom-file-input form-control" id="image" name="image" >
                                            <label class="custom-file-label" for="customFile"></label>
                                       </div>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5 style="padding-bottom: 10px;">Social Link :</h5>
                                            <input type="text" class="form-control" id="social_link" name="social" placeholder="Soicial Link" value="" />
                                        </div>

                                        <div class="form-group">
                                             <h5 style="padding-bottom: 10px;">Phone : <span style="color:red;">*</span></h5>
                                            <input type="number" minlength="11" id="phone" maxlength="11" name="phone" class="form-control" placeholder="Your Phone *" value=""  />
                                        </div>
                                        <div class="form-group">
                                            <h5 style="padding-bottom: 10px;">Division : <span style="color:red;">*</span></h5>
                                            <select class="form-control" name="division" id="divition_id" >
                                             <option value="">Select Your Division</option>
                                             @foreach ($divitions as $divition)
                                                 <option value="{{$divition->id}}">{{$divition->name}}</option>
                                             @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5 style="padding-bottom: 10px;">District : <span style="color:red;">*</span></h5>
                                            <select class="form-control" name="" id="district_id" >
                                             <option class="" value="" >Select Your District</option>
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <h5 style="padding-bottom: 10px;">Station : <span style="color:red;">*</span></h5>
                                            <select class="form-control" name="" id="station_id" >
                                             <option  value="">Select Your Station</option>
                                            </select>
                                        </div> --}}

                                         <div class="form-group" style="">
                                            <h5 style="margin-top:40px;">Gender : <span style="color:red;">*</span></h5>
                                            <div class="maxl" >
                                                <div class="col-md-6">
                                                    <label class="radio inline">
                                                        <input type="radio" name="gender"   value="Male"  > 
                                                        <span>Male </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                <label class="radio inline ">
                                                   <input type="radio" name="gender"  value="Female"  > 
                                                    <span>Female </span>
                                                </label>
                                                 </div>
                                            </div>
                                        </div>

                                         
                                     
                                       

                                    </div>
                                     <input type="submit" class="btnRegister btnRegister2" name="submit" value="Register"/>
                                </form>
                              
                                
                            </div>

                </div>
            </div>

        </div>
@endsection
@section('custom_js')
<script>
    $(document).ready(function(){
          var gender = null;
          var status = null;
          var image = null;
          
         $('[name="gender"]').click(function(){
            gender = $(this).val()
        })

        $('[name="status"]').click(function(){
             status = $(this).val()
        })

       
        $('#image').change(function(e){
           image = e.target.files[0];
        })

        $('#registrationForm').submit(function(e){
            e.preventDefault()
            $('.error').remove()
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var social_link = $('#social_link').val();
            var address = $('#address').val();
            var bloodgp_id = $('#bloodgp_id').val();
            var divition_id = $('#divition_id').val();
            var district_id = $('#district_id').val();
            // var station_id = $('#station_id').val();

            var Formdata = new FormData()
            Formdata.append('_token','{{csrf_token()}}')
            Formdata.append('name',name)
            Formdata.append('email',email)
            Formdata.append('phone',phone)
            Formdata.append('social_link',social_link)
            Formdata.append('address',address)
            Formdata.append('bloodgp_id',bloodgp_id)
            Formdata.append('divition_id',divition_id)
            Formdata.append('district_id',district_id)
            // Formdata.append('station_id',station_id)
            Formdata.append('gender',gender)
            Formdata.append('status',status)
            Formdata.append('image',image)
            // if(image == null){
            // $('#image').after('<div class="alert alert-danger error">image field is required</div>')
            // }else{
            // Formdata.append('image',image)
            // } 
            
         
            $.ajax({
                url : '{{route('website.registration.store')}}',
                method : 'post',
                // datatype : 'json',
                data : Formdata,
                processData : false,
                contentType : false,
                success : function(res){
                if(res.status == 'Done'){
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your Registration Successfully Complite',
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
                    setTimeout(function(){
                        window.location.reload(1);
                        }, 1000);
                    }
                    console.log(res)
                },
                error : function(err){
                    if(err.responseJSON.errors){
                    var error = err.responseJSON.errors
                        if(error.address){
                        $('#address').after('<div class="alert alert-danger error">Address  is required</div>')
                        }
                        if(error.divition_id){
                        $('#divition_id').after('<div class="alert alert-danger error">Dvition  is required</div>')
                        }
                        if(error.email){
                        $('#email').after('<div class="alert alert-danger error">Email  is required</div>')
                        }
                        if(error.name){
                        $('#name').after('<div class="alert alert-danger error">Name  is required</div>')
                        }
                        if(error.phone){
                        $('#phone').after('<div class="alert alert-danger error">phone  is required</div>')
                        }
                        if(error.bloodgp_id){
                        $('#bloodgp_id').after('<div class="alert alert-danger error">BloodGroup  is required</div>')
                        }
                        if(error.district_id){
                        $('#district_id').after('<div class="alert alert-danger error">District  is required</div>')
                        }
                        // console.log(error)
                    }
                   
                    console.log(err)
                }
            })
          

        })


        $('#divition_id').change(function(){
            var divition_id = $('#divition_id').val()

            $.ajax({
                url : '{{url('api/get-district')}}/' + divition_id,
                method : 'get',
                datatype : 'json',
                success : function(res){
                    console.log(res)
                    if(res.status == 'done'){
                        $('#district_id').empty()
                        $('#district_id').append(`
                        <option disabled selected>Select Your District</option>
                        `)
                     res.district.forEach(function(item){
                         $('#district_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                     })
                    }    
                },
                error : function(err){
                 console.log(error)
                }
            })
        })

        $('#district_id').change(function(){
            var district_id = $('#district_id').val()
            
            $.ajax({
                url : '{{url('api/get-station')}}/' + district_id,
                method : 'get',
                datatype : 'json',
                success : function(res){
                    console.log(res)
                    if(res.status == 'done'){
                        $('#station_id').empty()
                        $('#station_id').append(`
                        <option value="">Select Your Station</option>
                        `)
                     res.station.forEach(function(item){
                         $('#station_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                     })
                    }
                  
                },
                error : function(err){
                    console.log(err)
                }
            }) 
        })



    })
</script>
@endsection