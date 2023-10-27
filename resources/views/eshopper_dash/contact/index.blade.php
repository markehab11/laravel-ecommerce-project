<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     / Contact us
    @endsection

    @section('title_page2')
     / Tables
    @endsection

    @section('content')
      <section class="content">

                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Contact us</h1>
                  </div>
                <!-- /.card-header -->

                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>pro</th>
                      </tr>
                      </thead>
                      <tbody>
                    @foreach($contact as $contact)
                      <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                          <form action="{{ route('Contact.destroy', $contact->id ) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    @endsection
