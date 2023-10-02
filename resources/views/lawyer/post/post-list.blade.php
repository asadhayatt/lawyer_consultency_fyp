@extends('layouts.lawyer_layout')

@section('title','Post')

@section('page-content')
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow text-left">
                      <div class="card-body">
                        <h4 class="card-title">Posts</h4>
                        <p class="card-text">All Post list</p>
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
                              <tr>
                                <th scope="row">1</th>
                                <td>Asad</td>
                                <td>0201457800</td>
                                <td>asad@gmail.com</td>
                                <td>Criminal Case</td>
                                <td>
                                    <a href="{{ url('admin/show-post',1) }}" class="btn btn-primary">Show</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection