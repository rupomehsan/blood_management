@extends('admin.layouts.index')
@section('content')
<div class=" register view-doner" style="padding-top: 7%;margin-left: 17%;">
    <div class="row container">
       <button><a href="user-massage.php">ALL USER MASSAGES</a></button>
         <h4><i class="fa fa-angle-right"></i>Reply user Massage</h4><hr><div class="col-md-9 msg-table">

                    <form id="replyForm" method="post">
                        <input type="hidden" class="form-control" name="id" value="42">
                        <div class="form-group">
                           <label for="exampleFormControlTextarea1">To</label>
                            <input type="text" class="form-control" readonly id="to_email" name="email" value="{{$replymssg->email}}">
                        </div>
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">From</label>
                            <input type="text" class="form-control" name="From" id="from_email" placeholder="enter your email" value="developer@mdrupomehsan.com">
                        </div>
                         <div class="form-group">
                              <label for="exampleFormControlTextarea1">subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="seubject" value="Reply Message">
                        </div>
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1">User massage</label>
                            <input type="text" class="form-control" readonly="" value="{{$replymssg->opinion}}">
                        </div>
                       <div class="form-group">
                      <label for="exampleFormControlTextarea1">Reply massage</label>
                      <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                          <input type="submit" class="btnRegister" name="send" value="Send">
                    </form>
@endsection
@section('custom_js')
<script>
   $('#replyForm').submit(function(e){
       e.preventDefault();
       var to_email = $('#to_email').val()
       var from_email = $('#from_email').val()
       var subject = $('#subject').val()
       var message = $('#message').val()

       $.ajax({
           url : '{{url('backend/user-messeges')}}',
           method : 'post',
           datatype : 'json',
           data : {
               '_token' : '{{csrf_token()}}',
               'to_email' : to_email,
               'from_email' : from_email,
               'subject' : subject,
               'message' : message
           },
           success : function(res){
               console.log(res)
           },
           error : function(err){
               console.log(err)
           },
       })
    //    console.log(to_email,from_email,subject,message)
   })
</script>
@endsection