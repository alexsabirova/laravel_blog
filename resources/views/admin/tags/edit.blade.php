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
                        <h1 class="ml-2 text-gray">Edit tag #{{ $tag->id }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Tags</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.tags.show', $tag->id) }}">
                                    Tag #{{ $tag->id }}: {{ $tag->title }}</a></li>
                            <li class="breadcrumb-item active">Edit tag</li>
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
                        <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25 mb-4">
                                <input type="text" class="form-control" name="title"
                                       placeholder="Enter tag's name" value="{{ $tag->title }}">
                                @error('title')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-success col-1" value="Update">
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

