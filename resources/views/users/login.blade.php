@extends('layout')
@section('content')

<div style=" border: 2px solid green; padding: 10px; border-radius: 2px; ">
    <h3>Log in to post gigs</h3>
<form action="/users/authenticate" method="post">
                @csrf
                
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

                <br>

                <input type="submit" value="Sign in">
                <p>Don't have have an account?  <a href="/register">Register</a> </p>
               
</div>

@endsection