@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-12 p-2 mb-2 text-center">
                <h1>
                    {{ $post->title }}
                </h1>
                <h3>
                    {{ $post->author }}
                </h3>
                <h3>
                    {{ $post->created_at }}
                </h3>
            </div>
            <div class="col-12 mb-2">
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
            </div>
            <div class="col-12 p-2">
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection