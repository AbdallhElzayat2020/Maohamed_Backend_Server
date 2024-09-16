@extends('admin.layouts.master')
@section('title_dashboard','Gallery Page')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> Gallery Page</h1>
            </div>

            <div class="card card-primary">
                <div class="card-body">
                    <form action="{{route('admin.gallery.update',$gallery->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">عنوان المشروع</label>
                            <input type="text" value="{{$gallery->name}}" required name="name" class="form-control">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <input type="text" value="{{$gallery->description}}" required name="description"
                                   class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">صورة المشروع</label>
                            <input type="file" name="image" class="form-control">
                            <img style="width: 70px; height: 70px; margin-top: 10px" src="{{asset($gallery->image)}}"
                                 alt="">
                            @error('image')
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
