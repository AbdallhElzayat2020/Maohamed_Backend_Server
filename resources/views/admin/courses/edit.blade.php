@extends('admin.layouts.master')

@section('title_dashboard', 'Edit Course')

@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Edit Course</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.courses.update', $course->id) }}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="title">Course Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           value="{{ old('title', $course->title) }}" required>
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Course Description</label>
                                    <textarea name="description" id="description" class="form-control"
                                              required>{{ old('description', $course->description) }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="content_text">Course content_text</label>
                                    <textarea name="content_text" id="content_text" class="form-control"
                                              required>{{ $course->content_text }}</textarea>
                                    @error('content_text')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="instructor_name">Instructor Name</label>
                                    <input type="text" name="instructor_name" id="instructor_name" class="form-control"
                                           value="{{ $course->instructor_name }}" required>
                                    @error('instructor_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Course Price</label>
                                    <input type="number" step="0.01" name="price" id="price" class="form-control"
                                           value="{{ old('price', $course->price) }}" required>
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Course Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <img style="width: 70px; height: 70px; margin-top: 10px"
                                         src="{{asset($course->image)}}"
                                         alt="">
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update Course</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
