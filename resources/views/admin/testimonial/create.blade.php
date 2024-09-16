@extends('admin.layouts.master')
@section('title_dashboard','testimonial Page')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>انشاء راي عميل</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>انشاء راي عميل</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.testimonial.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">اسم العميل </label>
                            <input type="text" value="{{old('name')}}" required name="name" class="form-control">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nickname">اللقب او اسم الشركة </label>
                            <input type="text" value="{{old('nickname')}}" required name="nickname" class="form-control">
                            @error('nickname')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <input type="text" value="{{old('description')}}" required name="description" class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">اختر لوجو الشركة او صورة </label>
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
