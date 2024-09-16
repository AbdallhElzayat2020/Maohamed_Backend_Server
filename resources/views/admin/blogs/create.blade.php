@extends('admin.layouts.master')
@section('title_dashboard','Blogs Page')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>انشاء مدونة</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>انشاء مدونة</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.blogs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">عنوان المدونة </label>
                            <input type="text" value="{{old('title')}}" required name="title" class="form-control">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف </label>
                            <input type="text" value="{{old('description')}}" required name="description"
                                   class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">المحتوي</label>
                            <textarea type="text" required name="content"
                                      class="form-control">value="{{old('content')}}"
                            </textarea>
                            @error('content')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">صورة المدونة </label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
