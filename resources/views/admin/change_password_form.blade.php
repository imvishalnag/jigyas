@extends('admin.template.admin_master')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger" >{{ Session::get('error') }}</div>
                    @endif
                    <div class="card-body">
                        {{ Form::open(array('route' => 'admin.change_password', 'method' => 'post')) }}
                        <h4 class="mt-0 header-title">Change Password</h4>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Current Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password"  name="current_password" required placeholder="Enter your current password">
                                @error('current_password')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password"  name="new_password" required placeholder="Enter New password">
                                @error('new_password')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password"  name="confirm_password" required placeholder="Enter Confirm password">
                                @error('confirm_password')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div><!-- container-fluid -->


</div> <!-- Page content Wrapper -->
@endsection	
