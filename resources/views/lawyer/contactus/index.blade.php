@extends('layouts.lawyer_layout')
@section('title','Contact Us')

@section('page-content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow ">
                  <div class="card-body">
                    <h4 class="card-title">Contact Us</h4>
                    <div class="row">
                        <div class="col-6">
                            <p class="card-text">All Clients Contact List here</p>
                        </div>
                        <div class="col-6">
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @else
                            @endif
                        </div>
                    </div>
                    <table class="table mt-3">
                        <thead class="shadow">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="shadow">
                            @php
                                $count=1;
                            @endphp
                            @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <a href="{{ url('admin/delete-contact-us',$contact->id)}}" class="btn btn-danger">Delete</a>
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