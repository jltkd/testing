@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Post</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="/posts/new" method="POST" class="form">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea class="form-control" name="body" id="body" rows="10"></textarea>
                                </div>
                                <button class="btn btn-primary mb-2">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
