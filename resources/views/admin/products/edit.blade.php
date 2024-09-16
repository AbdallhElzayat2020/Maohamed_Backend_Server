@extends('admin.layouts.master')
@section('title_dashboard','product Page')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>تعديل منتج </h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>تعديل منتج</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.products.update',$product->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" value="{{$product->name}}" required name="name" class="form-control">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف </label>
                            <input type="text" value="{{$product->description}}" required name="description"
                                   class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">السعر</label>
                            <input type="text" value="{{$product->price}}" required name="price"
                                   class="form-control">
                            @error('price')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">صورة المنتج</label>
                            <input type="file" name="image" class="form-control">
                            <img style="margin-top: 10px" width="100" src="{{asset('storage/'.$product->image)}}"
                                 alt="{{$product->name}}">
                            @error('image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="file_path">الملف</label>
                            <input type="file" name="file_path" class="form-control">
                            @if($product->file_path)
                                <p>
                                    Current File: <a href="{{ asset('storage/' . $product->file_path) }}" download>
                                        Download
                                    </a>
                                </p>
                            @endif                            @error('file_path')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
