@extends('layouts.lawyer_layout')

@section('title','Post')

@section('page-content')
    
<section>
  <div class="container">
      <div class="row">
          <div class="col-12">
              {{-- @if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ Session::get('success') }}</strong> 
                  </div>
                  <script>
                    $(".alert").alert();
                  </script>                    
              @else
              @endif --}}
              <div class="card shadow text-left" style="background-color: rgb(208, 230, 201)">
                <div class="card-body row">
                  <div class="row w-100 ">
                      <div class="col-6">
                          <h4 class="card-title">All Posts</h4>
                          <p class="card-text mb-3">Clients Latest Post</p>
                      </div>
                      {{-- <div class="col-6 text-right ">
                          <a href="{{ url('client/create-post') }}" class="btn btn-primary">Create Post</a>
                      </div> --}}
                  </div>
                  <div class="row w-100 " style="justify-content: center">
                      <div class="col-md-8">
                          @foreach ($posts as $post)
                              <div class="card shadow" style="margin:10px">
                                  <div class="icon d-flex p-3">
                                      <img src="{{ asset('people.png') }}" style="width: 50px;height:40px;border: 1px solid black;border-radius: 50%" alt="profile-pic" class="img-fluid" srcset="">
                                      <div class="card-title ml-3">
                                          <h5 class="m-0 p-0">{{ $post->user->name }}</h5>
                                          <small>{{ $post->user->phone }}</small>
                                          <small>| {{ $post->created_at->diffForHumans() }}</small>
                                      </div>
                                  </div>
                                  <div class="card-body text-justify">
                                      <p>{{ $post->message }}</p>
                                      <div class="img w-100">
                                          <img class="img-fluid" src="{{ asset('posts/'.$post->image) }}" alt="" srcset="">
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
                  <hr>
                  
              </div>
              </div>
          </div>
      </div>
  </div>
</section>



@endsection