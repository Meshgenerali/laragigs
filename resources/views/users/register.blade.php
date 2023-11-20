@extends('layout')
@section('content')

<div style=" border: 2px solid green; padding: 10px; border-radius: 2px; ">
    <h3>Create an account to post gigs</h3>
<form action="/users" method="post">
                @csrf
                <label for="company">Name:</label>
                <input type="text" name="name" placeholder="Enter your full name" value="{{old('name')}}"/>
                @error('name')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror


                <label for="location">Email:</label>
                <input type="email" name="email" placeholder="Enter a valid email" value="{{old('email')}}">
                @error('email')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="email">Password</label>
                <input type="password" name="password" placeholder="type your password" value="{{old('password')}}">
                @error('password')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="email">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="confirm your password" value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <br>

                <input type="submit" value="Sign Up">
                <p>Alread have an account?  <a href="/login">Login</a> </p>
               
</div>

@endsection