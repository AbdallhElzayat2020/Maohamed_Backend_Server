@extends('admin.layouts.master')
@section('title_dashboard', 'Edit Video - ' . $video->title)
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Edit Video - {{ $video->title }}</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.videos.update', $video->id) }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
{{--                                <div class="form-group">--}}
{{--                                    <label for="course_id">Select Course</label>--}}
{{--                                    <select name="course_id" id="course_id" class="form-control" required>--}}
{{--                                        @foreach($courses as $course)--}}
{{--                                            <option--}}
{{--                                                value="{{ $course->id }}" {{ $video->course_id == $course->id ? 'selected' : '' }}>--}}
{{--                                                {{ $course->title }}--}}
{{--                                            </option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}

                                <div class="form-group">
                                    <label for="title">Video Title</label>
                                    <input type="text" value="{{ old('title', $video->title) }}" name="title" id="title"
                                           class="form-control" required>
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="video">Upload Video (optional)</label>
                                    <input type="file" name="video" id="video" class="form-control">
                                    <video width="100" height="100" controls>
                                        <source src="{{ asset('storage/'.$video->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video> @error('video')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Video Description</label>
                                    <textarea name="description" id="description"
                                              class="form-control">{{ old('description', $video->description) }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update Video</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
