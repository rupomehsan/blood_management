
@extends('layouts.client')

@section('content')

<div class="wrapper pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Registrasion </h3>
                    <hr />

                    @if (Session::has('message'))
                        <div class="alert alert-danger">
                            <strong>{{ Session::get('message') }}</strong>
                        </div>
                    @endif

                    <form action="{{url('/register')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="enter your name" />
                            @error('name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
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
                            <button class="btn btn-primary btn-block" type="submit">rigister</button>
                            <button type="button" class="btn btn-dark btn-block" ><a href="{{url('/login')}}">login</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
