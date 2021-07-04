@extends('admin.layouts.index')
@section('content')
<div class="row pt-50">
	<div class="col-md-2"> </div>
          <div class="col-md-10">
            <div class="content-panel">
                

              <h4><i class="fa fa-angle-right"></i>All posted comments</h4><hr>
                 <form method="GET" action="#">
                          <input type="text" name="search" placeholder="Search....." >
                          <button type="submit"><i class="fa fa-search"></i></button>
                   </form>

                     <div class="scrolsec" style="overflow-x:auto; overflow: scroll;height: 550px;">      
                      <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                  	<th>No</th>
                    <th>blog-id</th>
                    <th>First-name</th>
                    <th>Last-name</th>
                    <th>Comments</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
               
                @if (count($allcomment))
                   @foreach ($allcomment as $comment)
                       <tr>
                         <td>{{$loop->index + 1}}</td>
                         <td>{{$comment->blog_id}}</td>
                         <td>{{$comment->name}}</td>
                         <td>{{$comment->last_name}}</td>
                         <td>{{$comment->comments}}</td>
                         <td><Button onclick="deleteItem({{ $comment->id }})" class="btn btn-danger">Delete</Button></td>
                       </tr>
                   @endforeach 
                @endif


                </tbody>
              </table>
         
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>

@endsection
@section('custom_js')

<script>
  function deleteItem(id){
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {

          $.ajax({
            url : '{{url('backend/comments')}}/'+id,
            method : 'post',
            datatype : 'json',
            data : {
              '_token' : '{{csrf_token()}}',
              '_method' :'DELETE',
              'id' : id,
            },
            success : function(res){
              console.log(res)
              if(res.status == 'done')
              swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              setTimeout(() => {
                window.location.reload()
               }, 1000);
            },
            error : function(err){
              console.log(err)
            }
          })
         
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      })


  }
</script>
@endsection