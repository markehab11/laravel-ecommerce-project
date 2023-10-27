<?php
if (auth()->check() && auth()->user()->role === 'admin') { ?>

    @extends('eshopper_dash.layouts.app')

    @section('title')
     E Shopper |Dashboard
    @endsection

    @section('title_page')
     /  Add User
    @endsection

    @section('title_page2')
     / Tables
    @endsection

@section('content')

<div class="card">
    <section class="content">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('Users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control"  placeholder="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" placeholder="email" name="email">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">password</label>
                        <input type="password" class="form-control" id="passwordField" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <input  type="radio" name="role" value="user">
                        <label for="userCheckbox">User</label><br>

                        <input type="radio" name="role" value="admin">
                        <label for="adminCheckbox">Admin</label>
                    </div>
                <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
              </form>
            </div>
            <!-- /.card -->

    </section>
    <br><br><br><br>
@endsection

<?php
    }else {
        abort(403, 'Unauthorized');
    }
?>
