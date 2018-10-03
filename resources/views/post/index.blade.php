@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($posts as $post)
                            <b>
                                <b></b><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></b><br>
                                {{ \Carbon\Carbon::parse($post->created_at)->format('m/d/Y') }}
                            </p>
                            <p>{{ $post->body }}</p>
                            <hr>
                        @endforeach
                        <div class="mx-auto">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
