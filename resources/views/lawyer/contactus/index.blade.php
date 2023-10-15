@extends('layouts.lawyer_layout')
@section('title','Contact Us')

@section('page-content')
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('success'))
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
                @endif
                    <div class="card shadow text-left">
                      <div class="card-body">
                        <h4 class="card-title">Contact Us Page</h4>
                        <p class="card-text">All Contact Us list</p>
                        <hr>
                        <table class="table">
                            <thead class="shadow">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody class="shadow">
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <a href="{{ url('admin/delete-contact-us',$contact->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>   
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection