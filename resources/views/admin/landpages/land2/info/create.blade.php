@extends('admin.layouts.master')
@section('title_dashboard', 'Information LandTwo')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> Information LandTwo</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Information LandTwo</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.info-2.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">العنوان الرئيسي </label>
                            <input type="text" value="{{ old('title') }}" required name="title" class="form-control">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sub_title"> العنوان التاني</label>
                            <input type="text" value="{{ old('sub_title') }}" required name="sub_title"
                                class="form-control">
                            @error('sub_title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="video_url"> لينك الفيديو</label>
                            <input type="text" value="{{ old('video_url') }}" required name="video_url" class="form-control">
                            @error('video_url')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <input type="text" value="{{ old('description') }}" required name="description"
                                class="form-control">
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
