@extends('master')
@section('content')  
{{-- <div class="col-lg-3"></div> --}}
<div class="container" style="height: 400px; padding-top:50px;">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="text-primary">
                Login Page    
            </h1>
            <form action="/login" method="POST">  
                <div class="form-group">
                    @csrf;
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div> 
@endsection