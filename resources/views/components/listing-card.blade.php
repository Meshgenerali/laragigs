@props(['listing'])

<div style="background-color: #F0F0F0; padding: 10px; border: 2px solid #333; margin-bottom: 5px; border-radius: 2px; ">

<div>
   <img src="{{asset('images/no-image.png')}}" alt="">
</div>
   <h2>{{$listing->heading}}</h2>
       <h3>
           <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
       </h3>

       <div style="color: red; font-style:italic; ">{{ $listing->company }}</div>

       <ul>
       <li><a href="#">laravel</a></li>
       <li><a href="#">API</a></li>
       <li><a href="#">Backend</a></li>
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