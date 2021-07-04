@extends('admin.layouts.index')
@section('content')
    <div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
        <div class="row container">

            <button><a href="allblog.php">See all blogs</a></button>
            <h4><i class="fa fa-angle-right"></i>CREATE A POST</h4><hr><table class="table table-striped table-advance table-hover">  
            <form id="blogForm" method="post" enctype="multipart/form-data">
            <div class="col-md-10">
            <input type="hidden" class="form-control" id="blog_id" name="id"  value="{{$blogedit->id}}" />
            <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$blogedit->title}}" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="sub_title" name="subtitle" placeholder="sub-title" value="{{$blogedit->sub_title}}"  />
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripsion</label>
            <textarea class="form-control" id="desc" name="description" rows="3">{{$blogedit->desc}}</textarea>
            </div>
            <div class="custom-file">
            <h5 style="padding-bottom: 10px;">Image</h5>
            <img src="{{asset($blogedit->image)}}" alt="" height="50" width="80">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="customFile"></label>
            </div>

            <input type="submit" class="btnRegister" name="submit" value="Update"/>
            </div>
    </form>
    </div>
    </div>


@endsection
@section('custom_js')
    <script>
      
        var image = null ;
        $('#image').change(function(e){
           image = e.target.files[0];
        })
        $('#blogForm').submit(function(e){
            e.preventDefault()
            $('.error').remove()
            var id = $('#blog_id').val()
            var title = $('#title').val();
            var sub_title = $('#sub_title').val();
            var desc = $('#desc').val();

            var Formdata = new FormData()
            Formdata.append('_token','{{csrf_token()}}')
            Formdata.append('_method','PATCH')
            Formdata.append('title',title)
            Formdata.append('desc',desc)
            Formdata.append('sub_title',sub_title)
            Formdata.append('image',image)
    
            $.ajax({
                url : '{{url('backend/blogs')}}/' + id,
                method : 'post',
                datatype : 'json',
                data : Formdata,
                processData : false,
                contentType : false,
                success : function(res){
                if(res.status == 'Done'){
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Post Successfully Created',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    setTimeout(function(){
                        window.location.reload(1);
                        }, 1000);
                    }
                    console.log(res)
                },
                error : function(err){
                    if(err.responseJSON.errors){ 
                    var error = err.responseJSON.errors
                    if(error.title){
                    $('#title').after('<div class="alert alert-danger error">title  is required</div>')
                    }
                    if(error.sub_title){
                    $('#sub_title').after('<div class="alert alert-danger error">sub_title  is required</div>')
                    }
                    if(error.desc){
                    $('#desc').after('<div class="alert alert-danger error">desc  is required</div>')
                    }
                    if(error.image){
                    $('#image').after('<div class="alert alert-danger error">image  is required</div>')
                    }
                    console.log(error)
                    }
                
                    console.log(err)
                }
            })
          

        })
    </script>
@endsection