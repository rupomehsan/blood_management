@extends('admin.layouts.index')
@section('content')
<div class="row pt-50">
	<div class="col-md-2"></div>
          <div class="col-md-10 msg-table">
            <div class="content-panel">
            
              <h4><i class="fa fa-angle-right"></i>All USER MASSAGE</h4><hr>
                 <form method="GET" action="serch-result.php">
                          <input type="text" name="search" placeholder="Search....." >
                          <button type="submit"><i class="fa fa-search"></i></button>
                   </form>

                     <div class="scrolsec" style="overflow-x:auto;height: 550px;">      
                      <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                  	 <th>id</th>
                    <th class="firstname">first Name</th>
                    <th class="firstname">last Name</th>
                    <th>Phone</th>
                    <th> Email</th>
                    <th>Massage</th>
                    <th>Post time</th>
                     <th>Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                 @if (count($contacts))
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$contact->first_name}}</td>
                        <td>{{$contact->last_name}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->opinion}}</td>
                        <td>{{$contact->created_at->format('d/m/Y')}}</td>
                        <td>
                          <a href="{{route('user-messeges.show',$contact->id)}}" class="btn btn-success">View</a>
                          <a href="{{route('user-messeges.edit',$contact->id)}}" class="btn btn-primary">Reply</a>
                          <button onclick="deleteItem({{ $contact->id }})" data-id="" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                    @endforeach 
                 @endif
               
               
                </tbody>
              </table>
          
              <div class="demo">
      			    <nav class="pagination-outer" aria-label="Page navigation">
      			        <ul class="pagination">
      			          
                        {{ $contacts->links() }}
      			          
      			        </ul>
      			    </nav>
            </div>
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
            url : '{{url('backend/user-messeges')}}/' + id,
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