@extends('admin.layouts.master')
@section('title_dashboard', 'Add Video to ' . $course->title)
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Add Video to {{ $course->title }}</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form id="video-upload-form" method="POST" action="{{ route('admin.videos.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <div class="form-group">
                                    <label for="title">Video Title</label>
                                    <input type="text" value="{{ old('title') }}" name="title" id="title"
                                           class="form-control" required>
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="video">Upload Video</label>
                                    <input type="file" name="video" id="video" class="form-control" required>
                                    @error('video')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Video Description</label>
                                    <textarea name="description" id="description"
                                              class="form-control">{{ old('description') }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add Video</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Existing Videos in {{ $course->title }}</h3>
                            @if($videos->count())
                                <ul>
                                    @foreach($videos as $video)
                                        <li id="video-{{ $video->id }}">
                                            <h5>{{ $video->title }}</h5>
                                            <p>{{ $video->description }}</p>
                                            <p>Duration: {{ $video->duration }}</p>
                                            <video width="400" controls>
                                                <source src="{{ asset('storage/'.$video->video) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="mt-2">
                                                <button class="btn btn-danger btn-sm" onclick="deleteVideo({{ $video->id }})">Delete</button>
                                                <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No videos found for this course.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteVideo(videoId) {
            if (confirm('Are you sure you want to delete this video?')) {
                fetch(`/admin/videos/${videoId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById(`video-${videoId}`).remove();
                            alert('Video deleted successfully!');
                        } else {
                            alert('Error deleting video.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>
@endsection
