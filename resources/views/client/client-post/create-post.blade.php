@extends('layouts.client_layout')

@section('title','Create Post')
@section('page-content')
    
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="card w-100 shadow">
                    <div class="card-title mt-3">
                        <h3>Create a New Post</h3>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ url('client/store-post') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <textarea type="text" class="form-control shadow" name="message" value="{{ old('message') }}" rows="4" placeholder="Write a message..."></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="image" placeholder="Attach an image" style="padding: 20px">
                        </div>
                            <button class="btn btn-primary" type="submit">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection