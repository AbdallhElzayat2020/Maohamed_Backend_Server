@extends('admin.layouts.master')
@section('title_dashboard','product Page')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>انشاء منتج </h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>انشاء منتج</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" value="{{old('name')}}" required name="name" class="form-control">
                            @error('name')
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
                            <label for="description">السعر</label>
                            <input type="text" value="{{old('price')}}" required name="price"
                                   class="form-control">
                            @error('price')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">صورة المنتج</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file_path">الملف</label>
                            <input type="file" name="file_path" class="form-control">
                            @error('file_path')
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
