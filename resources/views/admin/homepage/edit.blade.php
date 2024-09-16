@extends('admin.layouts.master')
@section('title_dashboard','Edit Banner')
@section('content')
    <div class="main-content">

        <section class="section">
            <div class="section-header">
                <h1>Edit Home Banner</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Edit Home Banner</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.homepage.update',$banner->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input class="form-control" value="{{$banner->title}}" name="title" type="text">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input name="description" id="description" value="{{$banner->description}}" type="text"
                                   class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
