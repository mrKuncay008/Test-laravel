@extends('auth_layout')
@section('title', 'Register')
@section('content')
<body>
    <div class="justify-between flex">
        <div class="card mt-14 drop-shadow-lg ml-32 w-[40vw] h-auto rounded-xl">
            <div class="card-body p-8">
                <h2 class="text-xl mb-6 font-bold">Create your account</h2>
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="{{route('register')}}" method="post">
                @csrf
                    <div class="form-group ">
                        <label><i class="font-italic"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-user"></i> Username</label>
                        <input type="text" name="name" class="form-control" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-key"></i> Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-key"></i> Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-lg pt-2 mb-3 btn-block"><i class="fa fa-user"></i> Register</button>
                    <p class="text-center text-sm pt-2">already have an account?<a class="text-blue-400" href="/"> Login </a> here!</p>
                </form>
            </div>
        </div>

        <div class="mt-44 mr-28 w-[34vw] h-[60vh] rounded-xl">
            <img src="{{ asset('/image/login.png') }}" class="w-[50vw] h-[50vh]">
        </div>
    </div>
@endsection