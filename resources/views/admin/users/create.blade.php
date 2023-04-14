@extends('admin.layouts.main')

@section('title')
    Admin Panel
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="ml-2 text-gray">Add new user</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">Add new user</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.users.store') }}" method="POST">
                            @csrf
                            <div class="form-group w-25 mb-4">
                                <input type="text" class="form-control" name="name"
                                       placeholder="Enter user's name">
                                @error('name')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-25 mb-4">
                                <input type="email" class="form-control" name="email"
                                       placeholder="Enter user's email">
                                @error('email')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- <div class="form-group w-25 mb-4">
                                <input type="text" class="form-control" name="password"
                                       placeholder="Enter user's password">
                            </div>-->
                            <div class="form-group w-25">
                                <label class="text-gray">Choose role</label>
                                <select class="form-control" name="role">
                                    @foreach($roles as $id => $role)
                                        <option value="{{ $id }}"
                                            {{ $id == old('role') ? 'selected' : ''}}
                                        >{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-success col-1" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

