@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
        @foreach ($posts as $item)
            <div class="card">
                <div class="card-body">
                    <h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                    <small>Created on {{$item->created_at}}</small> 
                </div>
                <hr>
            </div>
        @endforeach        
    @endif
@endsection