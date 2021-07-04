@extends('admin.layouts.index')
@section('content')
<div class="row pt-50">
	<div class="col-md-2"> </div>
          <div class="col-md-10">
            <div class="content-panel">
                

              <h4><i class="fa fa-angle-right"></i>All PAGES</h4><hr>
                 <form method="GET" action="#">
                          <input type="text" name="search" placeholder="Search....." >
                          <button type="submit"><i class="fa fa-search"></i></button>
                   </form>

                     <div class="scrolsec" style="overflow-x:auto; overflow: scroll;height: 550px;">      
                      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
          	<th>id</th>
            <th>page name</th>
            <th>page description</th>
            
            <th>post image</th>
            <th>Post time</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
        
          @if (count($pages))
             @foreach ($pages as $page)
             <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{$page->page_name}}</td>
              <td>{{$page->page_desc}}</td>
              <td>{{$page->created_at->format('d/m/y')}}</td>
              <td><img src="{{asset($page->image)}}" alt="" height="40" width="60"></td>
              <td>
                <a href="{{route('mypages.show',$page->id)}}" class="btn btn-success btn-sm">View</a>
                <a href="{{route('mypages.edit',$page->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <button onclick="deleteItem({{ $page->id }})" data-id="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
              </td>
             </tr>
             @endforeach 
          @endif


        </tbody>
      </table>
      <div class="demo">
  <nav class="pagination-outer" aria-label="Page navigation">
      <ul class="pagination">
          <li class="page-item">
              <a href="#" class="page-link" aria-label="Previous">
                  <span aria-hidden="true">«</span>
              </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item active"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
              <a href="#" class="page-link" aria-label="Next">
                  <span aria-hidden="true">»</span>
              </a>
          </li>
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
            url : '{{url('backend/mypages')}}/'+id,
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
