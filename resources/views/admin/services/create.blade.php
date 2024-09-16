@extends('admin.layouts.master')
@section('title_dashboard','services Page')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> services Page</h1>
            </div>

            <div class="card card-primary">
                <div class="card-body">
                    <form action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">عنوان الخدمة</label>
                            <input type="text" value="{{old('name')}}" required name="name" class="form-control">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <input type="text" value="{{old('description')}}" required name="description"
                                   class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">صورة الخدمة</label>
                            <input type="file" name="image"  class="form-control">
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
