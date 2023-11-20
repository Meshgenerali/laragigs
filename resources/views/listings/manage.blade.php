@extends('layout')
@section('content')

<div style="margin: auto;">
<h3>Manage listings</h3>

@unless ($listings->isEmpty())
@foreach ($listings as $listing)
<table style="border: 1px solid green; border-radius: 4px; width: 100%; margin-top: 4px; background-color: #F0F0F0;">
<tr>
    <td>
    <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
    </td>
    <td>
    <a href="/listings/{{$listing->id}}/edit" class="edit">Edit Gig</a>
    </td>

    <td>
    <form action="/listings/{{$listing->id}}" method="post">
            @csrf
            @method('DELETE')
            <br>
            <button style="border: 2px solid green; background-color: red; color: #F0F0F0; border-radius: 4px; width: 120px; font-weight: 600;">Delete</button>
        </form>
    </td>
</tr>

<tr>
    <td>
    <div style="color: red; font-style:italic; ">{{ $listing->company }}</div>
    </td>
</tr>

<tr>
    <td>
    <p>{{ $listing->description }}</p>
    </td>
</tr>
</table>
    
@endforeach

@else
<table style="border: 1px solid green; border-radius: 4px;">
<tr>
    <td>
        <h3>No listings available</h3>
    </td>
</tr>
</table>

    
@endunless
</div>

@endsection