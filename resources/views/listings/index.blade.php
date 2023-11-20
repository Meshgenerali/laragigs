@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
<div style="padding: 10px; ">
    @unless (count($listings) == 0)
     @foreach ($listings as $listing)
     <div style="background-color: #F0F0F0; padding: 10px; border: 2px solid #333; margin-bottom: 5px; border-radius: 6px; ">

     <div>
        <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="">
     </div>
        <h2>{{$listing->heading}}</h2>
            <h3>
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>

            @php
            $tags = explode(',', $listing->tags);
            
            @endphp

            <ul>
                @foreach ($tags as $tag)
                <li><a href="/?tag={{$tag}}">{{ $tag }}</a></li>
                @endforeach
           
            
            </ul>

            <div>{{ $listing->location }}</div>
            <p>{{ $listing->description }}</p>

            <div>
                <a href="{{ $listing->email }}" target="_blank">{{$listing->email}}</a>
            </div>

            <div>
                <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a>
            </div>

    </div>
                
    @endforeach

    @else
    <p>No Listings available.</p>
    @endunless 

</div>

 <div>
{{$listings->links()}}
</div> 

@endsection


