@extends('auth_layout')
@section('title', 'login')
@section('content')
<body>
    <div class="justify-between flex">
        <div class="card mt-32 drop-shadow-lg ml-32 w-[30vw] h-auto rounded-xl">
            <div class=" card-body p-8">
                <h1 class="text-xl pb-3"><b>Task Management</b><br>Sign in</h1>
                
                @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    <b>Opps!</b> {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                    <div class="form-group pb-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group mb-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary rounded-lg pt-2 mb-3 btn-block">Log In</button>
                    
                    <p class="text-center text-sm ">Don't have an account yet? <a class="text-blue-400" href="register">Register</a> Now!</p>
                </form>
            </div>
        </div>

        <div class="mt-44 mr-28 w-[34vw] h-[60vh] rounded-xl">
            <img src="{{ asset('/image/login.png') }}" class="w-[50vw] h-[50vh]">
        </div>
    </div>
@endsection