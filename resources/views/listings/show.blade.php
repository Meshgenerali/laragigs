@extends('layout')
<div style="padding: 10px; ">

@section('content')
@include('partials._search')

<div style="background-color: #F0F0F0; width: 90%; padding: 10px; border: 2px solid #333; margin-bottom: 5px; border-radius: 6px; ">

<div>
   <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="">
</div>
   <h2>{{$listing->heading}}</h2>
       <h3>
           <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
       </h3>

       <div style="color: red; font-style:italic; ">{{ $listing->company }}</div>

       @php
           $tags = explode(',', $listing->tags);
       @endphp

        <ul>
                @foreach ($tags as $tag)
                <li><a href="/?tag={{$tag}}">{{$tag}}</a></li>
                    
                @endforeach
        </ul>
      



       <div>{{ $listing->location }}</div>
       <p>{{ $listing->description }}</p>

       <div>
           <a href="{{$listing->email}}" target="_blank">{{$listing->email}}</a>
       </div>

       <div>
           <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a>
       </div>

       <!-- <div style="border: 1px solid green; margin-top: 4px; border-radius: 2px; padding: 4px;">
        <a href="/listings/{{$listing->id}}/edit" class="edit">Edit Gig</a>

        <form action="/listings/{{$listing->id}}" method="post">
            @csrf
            @method('DELETE')
            <br>
            <button style="border: 2px solid green; background-color: red; color: #F0F0F0; border-radius: 4px; width: 120px; font-weight: 600;">Delete</button>
        </form>
       </div> -->


@endsection