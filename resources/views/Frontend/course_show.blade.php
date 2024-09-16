<!-- resources/views/frontend/course_show.blade.php -->

@extends('Frontend.layouts.master')
@section('front_title', $course->title)
<!-- Include Video.js CSS -->
@section('head')
    <link href="https://vjs.zencdn.net/7.20.2/video-js.css" rel="stylesheet" />

    <!-- Include Video.js JavaScript -->
    <script src="https://vjs.zencdn.net/7.20.2/video.min.js"></script>

@endsection
@include('Frontend.layouts.header')

@section('content')
    <div class="container my-5">
        <!-- Course Header -->
        <div class="row">
            <div class="col-md-8">
                <h2>{{ $course->title }}</h2>
                <p style="color:black" class="mt-3">{{ $course->description }}</p>
            </div>
        </div>

        <!-- Video Player -->
        <div class="row mt-4">
            <div class="col-md-8">
                <video id="videoPlayer" class="video-js vjs-default-skin" controls preload="auto" style="width: 100%; height: 700px; ">
                    <source src="" id="videoSource" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-4">
                <!-- Video List -->
                <h5>Course Videos</h5>
                <ul class="list-group">
                    @foreach ($course->videos as $index => $video)
                        <li style="cursor: pointer;" class="list-group-item video-item {{ $index === 0 ? 'active' : '' }}"
                            data-video="{{ route('video.stream', ['filename' => basename($video->video)]) }}">
                            {{ $video->title }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <style>
        .video-item.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videoItems = document.querySelectorAll('.video-item');
            const videoPlayer = videojs('videoPlayer');

            function updateActiveVideo(selectedItem) {
                videoItems.forEach(item => item.classList.remove('active'));
                selectedItem.classList.add('active');
            }

            function loadVideo(url) {
                videoPlayer.src({
                    type: 'video/mp4',
                    src: url
                });
                videoPlayer.load();
                videoPlayer.play();
            }

            if (videoItems.length > 0) {
                const firstVideoItem = videoItems[0];
                const firstVideoUrl = firstVideoItem.getAttribute('data-video');
                loadVideo(firstVideoUrl);
                updateActiveVideo(firstVideoItem);
            }

            videoItems.forEach(item => {
                item.addEventListener('click', function() {
                    const videoUrl = this.getAttribute('data-video');
                    loadVideo(videoUrl);
                    updateActiveVideo(this);
                });
            });
        });
        videoPlayer.on('loadedmetadata', function() {
            console.log('Metadata loaded for current video');
        });
    </script>
@endsection
