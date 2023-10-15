@extends('layouts.client_layout')

@section('title','Create Post')
@section('page-content')
    
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="card w-100 shadow">
                    <div class="card-title mt-3">
                        <h3>Update a Post</h3>
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
                        <form action="{{ url('client/update-post') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <input type="text" hidden value="{{ $post->id }}" name="id">
                            <textarea type="text" class="form-control shadow m-3" name="message" value="{{ old('message') }}" rows="4" placeholder="Write a message...">{{ $post->message }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="file" class="m-3" name="image" placeholder="Attach an image" style="padding: 20px">
                            <img src="{{ asset('posts/'.$post->image) }}" alt="" srcset="">
                        </div>
                            <button class="btn btn-primary mt-5" type="submit">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection