@extends('layouts.admin.index')

@section('main')
    <div class="w-11/12 mx-auto">
        
        <div>
            <h2 class="text-primary font-bold text-2xl py-2">
                {{$blog->title}}
            </h2>

            <img src="/storage/{{$blog->image}}" class="w-72 shadow-lg rounded-lg">

            <p>
                {!! $blog->body !!}
            </p>
        </div>

        
    </div>
@endsection