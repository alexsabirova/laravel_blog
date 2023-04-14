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
                        <h1 class="ml-4 text-gray">Tag #{{ $tag->id }}: {{ $tag->title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Tags</a></li>
                            <li class="breadcrumb-item active">Tag #{{ $tag->id }}: {{ $tag->title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-footer mb-3 d-flex">
                            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-primary col-1 mr-3">Edit</a>
                            <form action="{{ route('admin.tags.destroy', $tag->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    <a href="{{ route('admin.tags.destroy', $tag->id) }}" class="text-white">Delete</a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card ml-2">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td><b>ID:</b></td>
                                        <td>{{ $tag->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Title:</b></td>
                                        <td>{{ $tag->title }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

