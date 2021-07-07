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
                    <h1 class="font-weight-bold" style="margin-top: 20px;">Edit Blog</h1>
                    {{--<small>From now on you will start your activities.</small>--}}
                </div>
            </div>
        </div>
    </div>
    <!--/.Content Header (Page header)-->
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
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            {{ method_field('put')}}
                            <div class="form-group row">
                                <label for="Name" class="col-sm-3 col-form-label font-weight-600">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{ $blog->name }}" name="name" id="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Title" class="col-sm-3 col-form-label font-weight-600">Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{ $blog->title}}" name="title" id="title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Slug" class="col-sm-3 col-form-label font-weight-600">Slug</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{ $blog->slug }}" name="slug" id="slug">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Image" class="col-sm-3 col-form-label font-weight-600">Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{ $blog->image }}" name="image" id="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Tag" class="col-sm-3 col-form-label font-weight-600">Tag</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="{{ $blog->tag }}" name="tag" id="tag">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Short Description" class="col-sm-3 col-form-label font-weight-600">Short Description</label>
                                <div class="col-sm-9">
                                    <textarea name="short_description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $blog->short_description }}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="Description" class="col-sm-3 col-form-label font-weight-600">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $blog->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <input type="submit" class="btn btn-primary" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.body content-->
@endsection