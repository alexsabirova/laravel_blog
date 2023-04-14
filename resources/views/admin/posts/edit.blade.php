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
                        <h1 class="ml-2 text-gray">Edit post #{{ $post->id }}: {{ $post->title }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Post</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></li>
                            <li class="breadcrumb-item active">Edit post</li>
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
                        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50 mb-4">
                                <input type="text" class="form-control" name="title"
                                       placeholder="Enter post's name" value="{{ $post->title }}">
                                @error('title')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                                @error('content')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label class="text-gray">Choose category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? 'selected' : ''}}
                                        >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label class="text-gray">Choose tags</label>
                                <select class="select2" multiple="multiple" name="tag_ids[]"
                                        data-placeholder="Select exist tags..." style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile" class="text-gray">Add thumbnail</label>
                                <div class="w-75 mb-2">
                                    <img src="{{ url('/storage/' . $post->thumbnail) }}" alt="thumbnail" class="img-thumbnail w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnail">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('thumbnail')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile" class="text-gray">Add main image</label>
                                <div class="w-75 mb-2">
                                    <img src="{{ url('/storage/' . $post->image) }}" alt="image" class="img-thumbnail w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('image')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- /.card-body -->
                            <div class="form-group">
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-success col-1" value="Update">
                                </div>
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

