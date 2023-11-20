@extends('layout')
@section('content')
<div style="background-color: #F0F0F0; padding: 10px; border: 2px solid #333; margin-bottom: 5px; border-radius: 6px; ">

        <h3>Post a Gig to get a Developer</h3>

        <div>
            <form action="/listings" method="post" enctype="multipart/form-data">
                @csrf
                <label for="company">Company Name:</label>
                <input type="text" name="company" placeholder="Enter Name of the Company" value="{{old('company')}}"/>
                @error('company')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="title">Job Title:</label>
                <input type="text" name="title" placeholder="Enter job title" value="{{old('title')}}">
                @error('title')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="location">Job Location:</label>
                <input type="text" name="location" placeholder="Enter Location of the Job" value="{{old('location')}}">
                @error('location')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="email">Company Email</label>
                <input type="email" name="email" placeholder="Company Email e.g example@gmail.com" value="{{old('email')}}">
                @error('email')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="website">Website/Application URL:</label>
                <input type="url" name="website" placeholder="Website or app URL eg https://acme.com" value="{{old('website')}}">
                @error('website')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="tags">Tags/Comma Separated Tags:</label>
                <input type="text" name="tags" placeholder="Enter Comma Separated values" value="{{old('tags')}}"> 
                @error('tags')
                   <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="logo">Company Logo:</label>
                <input type="file" name="logo">
                @error('logo')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                

                <label for="description">Job Description:</label>
                <textarea name="description" placeholder="Enter Job Description">{{old('company')}}</textarea>
                @error('description')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <input type="submit" value="Create Gig">
                <a href="/">Back</a>
            </form>
        </div>

</div>
@endsection