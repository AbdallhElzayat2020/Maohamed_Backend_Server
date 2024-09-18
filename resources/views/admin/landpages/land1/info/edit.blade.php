@extends('admin.layouts.master')
@section('title_dashboard', 'Edit Information')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Information</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Edit Information</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.info-1.update', $info->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- To use PUT method for updating data --}}

                        <div class="form-group">
                            <label for="title">العنوان الرئيسي</label>
                            <input type="text" value="{{ old('title', $info->title) }}" required name="title"
                                class="form-control">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sub_title">العنوان التاني</label>
                            <input type="text" value="{{ old('sub_title', $info->sub_title) }}" required name="sub_title"
                                class="form-control">
                            @error('sub_title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">السعر</label>
                            <input type="text" value="{{ old('price', $info->price) }}" required name="price"
                                class="form-control">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="video_url"> الفيديو</label>
                            <input type="text" value="{{ old('video_url', $info->video_url) }}" required name="video_url"
                                class="form-control">
                            @error('video_url')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        @if ($info->video_url)
                            <div class="form-group mt-3">
                                <label>معاينة الفيديو</label>
                                <iframe width="200" height="150"
                                    src="https://www.youtube.com/embed/{{ $info->video_url }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <input type="text" value="{{ old('description', $info->description) }}" required
                                name="description" class="form-control">
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
