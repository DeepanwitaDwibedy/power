@extends('layouts.app')
@section('blogs')
    mm-active
@endsection
@section('content')
    <div class="content-header row align-items-center m-0">
        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
        </nav>
        <div class="col-sm-8 header-title p-0">
            <div class="media">
                <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div>
                <div class="media-body">
                    <h1 class="font-weight-bold" style="margin-top: 20px;">Create Blog</h1>
                    {{--<small>From now on you will start your activities.</small>--}}
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <!--/.Content Header (Page header)-->
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="body-content">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fs-17 font-weight-600 mb-0">Blog</h6>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('blogs.index') }}" class="btn btn-primary"> <i class="typcn typcn-arrow-back-outline"></i> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card mb-6">
                            <div class="card-body">
                                <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field()}}
                                    <div class="form-group row">
                                        <label for="Name" class="col-sm-3 col-form-label font-weight-600">Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{old('name')}}" name="name" id="name">
                                        </div>
                                        @error('name')
                                        <div class="text-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="Title" class="col-sm-3 col-form-label font-weight-600">Title </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{old('title')}}" name="title" id="title">
                                        </div>
                                        @error('title')
                                        <div class="text-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="Slug" class="col-sm-3 col-form-label font-weight-600">Slug</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{old('slug')}}" name="slug" id="slug">
                                        </div>
                                        @error('slug')
                                        <div class="text-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="Image" class="col-sm-3 col-form-label font-weight-600">Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="image" id="image">
                                        </div>
                                        @error('image')
                                        <div class="text-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="Tag" class="col-sm-3 col-form-label font-weight-600">Tag</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="tag" id="tag">
                                        </div>
                                        @error('tag')
                                        <div class="text-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="Short Description" class="col-sm-3 col-form-label font-weight-600">Short Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"  name="short_description" id="short_description"></textarea>
                                        </div>
                                        @error('short_description')
                                        <div class="text-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="Description" class="col-sm-3 col-form-label font-weight-600">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"  name="description" id="description"></textarea>
                                        </div>
                                        @error('description')
                                        <div class="text-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <input type="submit" class="btn btn-primary" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.body content-->
@endsection