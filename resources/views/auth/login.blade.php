
@extends('layouts.index')

@section('content')

<div class="wrapper pt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 col-12">
            <div class="card" style="margin-top: 15%;justify-content: center;display: flex;">
                <div class="card-body">
                    <h3>Admin Login</h3>
                    <hr />

                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            <strong>{{ Session::get('error') }}</strong>
                        </div>
                    @endif

                    <form action="{{url('/login')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Email Address" />
                            @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" />
                            @error('password')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                            {{-- <button type="button" class="btn btn-dark btn-block" ><a href="{{url('/register')}}">register</a></button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
