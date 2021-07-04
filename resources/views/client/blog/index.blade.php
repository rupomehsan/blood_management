@extends('layouts.index')
@section('content')
<section class="blog all-blog" id="my-blog" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
    <div class="container">
        <h3>all blgos</h3>
              

                 <div class="row"> 
                     
                  
                     @if (count($allblogs))
                        @foreach ($allblogs as $allblog)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="serviceBox">
                          <div class="service-icon">
                            <img  src="{{asset($allblog->image)}}" height="200" href="">
                          </div>
                          <div class="service-content blog-box">
                              <h3 class="title">{{$allblog->title}}</h3>
                              <p class="description">{{$allblog->desc}}</p>
                               <div class="blog-bottom">
                                    <div class="left col-md-6 col-sm-6 col-xs-6">
                                      <button type="btn"><a href="{{url('/single-blog',$allblog->id)}}">ReadMore</a></button>
                                    </div>
                                <div class="right col-md-6 col-sm-6 col-xs-6">
                                   <p>posted on :<span>{{$allblog->created_at->format('d/m/y')}}</span></p>
                                </div>
                          </div>
                          </div>
                         
                      </div>
                    </div>
                        @endforeach 
                     @endif
                  
                   

                     

                    </div>
         
      
      
   </div>
</section>
@endsection