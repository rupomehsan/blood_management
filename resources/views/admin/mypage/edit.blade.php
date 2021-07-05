@extends('admin.layouts.index')
@section('content')
<div class="row register-form blog-page"style="margin-left:17%;padding-top:7%;margin-bottom:20px;">
    <div class="overflow">
        <button type="btn btn-primary"><a href="all-pages.php" title="">See all pages</a></button>
    <h4><i class="fa fa-angle-right"></i>ADD a new page</h4><hr><table class="table table-striped table-advance table-hover">
     
    <form id="pageForm"  enctype="multipart/form-data">
        <div class="col-md-10">
            <input type="hidden" class="form-control" id="page_id"  value="{{$editpage->id}}" />
            <div class="form-group">
                <label for="exampleFormControlTextarea1">title</label>
                <input type="text" class="form-control" id="title" name="pagename" placeholder="Page name" value="{{$editpage->page_name}}" />
            </div>
           <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripsion</label>
              <textarea class="form-control" id="desc" name="pagedesc" rows="3">{{$editpage->page_desc}}</textarea>
            </div>
             <div class="custom-file">
              <h5 style="padding-bottom: 10px;">Image</h5>
              <img src="{{asset($editpage->image)}}" alt="" height="50" width="100">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="customFile"></label>
            </div>
              <input type="submit" class="btnRegister" name="submit" value="create"/>
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
        $('#pageForm').submit(function(e){
            e.preventDefault()
            $('.error').remove()
            var id = $('#page_id').val();
            var title = $('#title').val();
            var desc = $('#desc').val();

            var Formdata = new FormData()
            Formdata.append('_token','{{csrf_token()}}')
            Formdata.append('_method','PATCH')
            Formdata.append('title',title)
            Formdata.append('desc',desc)
            if(image !== null){
                Formdata.append('image',image)
            }
            Formdata.append('id',id)
    
            $.ajax({
                url : '{{url('backend/mypages')}}/' +id,
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
                    title: 'Page Successfully Updated',
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