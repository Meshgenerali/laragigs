@extends('layout')
@section('content')
<div style="background-color: #F0F0F0; padding: 10px; border: 2px solid #333; margin-bottom: 5px; border-radius: 6px; ">

        <h3>Edit: {{$listing->title}}</h3>

        <div>
            <form action="/listings/{{$listing->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="company">Company Name:</label>
                <input type="text" name="company" placeholder="Enter Name of the Company" value="{{$listing->company}}"/>
                @error('company')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="title">Job Title:</label>
                <input type="text" name="title" placeholder="Enter job title" value="{{$listing->title}}">
                @error('title')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="location">Job Location:</label>
                <input type="text" name="location" placeholder="Enter Location of the Job" value="{{$listing->location}}">
                @error('location')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="email">Company Email</label>
                <input type="email" name="email" placeholder="Company Email e.g example@gmail.com" value="{{ $listing->email }}">
                @error('email')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="website">Website/Application URL:</label>
                <input type="url" name="website" placeholder="Website or app URL eg https://acme.com" value="{{$listing->website}}">
                @error('website')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="tags">Tags/Comma Separated Tags:</label>
                <input type="text" name="tags" placeholder="Enter Comma Separated values" value="{{$listing->tags}}"> 
                @error('tags')
                   <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <label for="logo">Company Logo:</label>
                <input type="file" name="logo">
                <div style="margin-left: 450px;">
                    <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="">
                </div>
                @error('logo')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                

                <label for="description">Job Description:</label>
                <textarea name="description" placeholder="Enter Job Description">{{$listing->description}}</textarea>
                @error('description')
                    <p style="color: red; font-weight:500; text-align: center; font-size: 12px">{{$message}}</p>
                @enderror

                <input type="submit" value="Update Gig">
                <a href="/">Back</a>
            </form>
        </div>

</div>
@endsection