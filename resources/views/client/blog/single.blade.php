@extends('layouts.index')
@section('content')
<section class="blog-page" id="blog">
    <div class="row">
        <div class="col-md-12">

            <div class="blog-body">
                
                <div class="blog-img">
                      <img  src="{{asset($singelblog->image)}}" height="200">
                </div>
                <div class="row">
                    
                    <div class="col-10">
                        <div class="b-right">
                            <h5>{{$singelblog->sub_title}}</h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i>Post on:{{$singelblog->created_at->format('d/m/y')}}</li>
                                <li><i class="fa fa-user"></i>Admin</li>
                                <li><i class="fa fa-comment"></i>5 Comments</li>
                            </ul>
                            <p>
                             {{$singelblog->desc}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    Blog part end-->

<!--    comment part start-->
<section id="comments">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="row">
                <div class="col-2">
                    <div class="left-line"></div>
                </div>
                <div class="col-10">
                    <div class="comments-heading">
                        <h3><span>05</span> comments</h3>
                    </div>
                </div>
            </div>
            <div class="row comment-body">
               @if (count($comments))
                  @foreach ($comments as $comment)
                  <div class="col-2">
                    <div class="comments-img">
                        <img src="{{asset('client')}}/images/smile.jpg" height="100%" width="100%">
                    </div>
                </div>
               
                <div class="col-10">

                    <div class="comments-des">
                        <h5>{{$comment->name}}{{$comment->last_name}}</h5>
                        <span>{{$comment->comments}}</span>
                        <p>sadgasdgasdg</p>
                    </div>
                    
                </div>
                  @endforeach 
               @endif
              
            </div>
        </div>
    </div>
</div>
</section>
<!--    comment part end-->

<!--    leave a comment part start-->
<section id="leave-comment">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="comment-form">
                <form id="commentForm" method="post">
                    <div class="heading">
                        <div class="row">
                            <div class="col-2">
                                <div class="left-line"></div>
                            </div>
                            <div class="col-10">
                                <h3>write a comment</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <input type="hidden" name="" id="blog_id" value="{{$singelblog->id}}">
                            <input type="text" id="name" name="firstname" placeholder="Firs name">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" id="last_name" name="lastname" placeholder="last name" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <textarea name="comments" id="comment" placeholder="Comment" ></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="submit">sbumit comment</button>
                        </div>
                    </div>
                 

                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!--   hire part end-->
@endsection
@section('custom_js')
<script>
    $(document).ready(function(){
        $('#commentForm').submit(function(e){
            e.preventDefault();
            $('.error').remove();
            var name = $('#name').val()
            var last_name = $('#last_name').val()
            var comment = $('#comment').val()
            var id = $('#blog_id').val()

            $.ajax({
                url : '{{url('comments')}}',
                method : 'post',
                datatype : 'json',
                data : {
                    '_token' : '{{csrf_token()}}',
                    'name' : name,
                    'last_name' : last_name,
                    'comment' : comment,
                    'id' : id
                },
                success: function(res){
                    if(res.status=='done'){
                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your Commetns Successfully Send',
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
                        if(error.name){
                            $('#name').after('<div class="alert alert-danger error">name  is required</div>')
                        }
                        if(error.last_name){
                            $('#last_name').after('<div class="alert alert-danger error">last_name  is required</div>')
                        }
                        if(error.comment){
                            $('#comment').after('<div class="alert alert-danger error">comment  is required</div>')
                        }
                    }
                    console.log(err)
                },
            })
        })
      
    })
</script> 
@endsection