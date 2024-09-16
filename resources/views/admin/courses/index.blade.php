@extends('admin.layouts.master')
@section('title_dashboard', 'Courses Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Courses Page</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{route('admin.courses.create')}}">
                                Create New Course
                            </a>
                        </div>
                        <div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session()->get('success')}}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#ID</th>
                                        <th>
                                            Course Name
                                        </th>
                                        <th>Description</th>
                                        <th>content_text</th>
                                        <th>Price</th>
                                        <th>Cover_Img</th>
                                        <th>Instructor_Name</th>
                                        <th>Number Videos</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($courses as $key => $course )
                                        <tr>
                                            <td>
                                                {{$key +1}}
                                            </td>
                                            <td>
                                                {{$course->title}}
                                            </td>
                                            <td>
                                                {{$course->description}}
                                            </td>
                                            <td>
                                                {{$course->content_text}}
                                            </td>
                                            <td>
                                                {{$course->price}}
                                            </td>
                                            <td>
                                                <img src="{{asset($course->image)}}" alt="Cover Course"
                                                     class="img-fluid" style="max-width: 100px;">
                                            </td>
                                            <td>
                                                {{$course->instructor_name}}
                                            </td>
                                            <td>
                                                {{$course->videos->count()}}
                                            </td>
                                            <td>
                                                {{$course->created_at}}
                                            </td>
                                            <td class="d-flex align-items-center gap-5">
                                                <a href="{{route('admin.videos.createForCourse',$course->id)}}"
                                                   class="btn btn-success btn-sm mr-2">Add Video</a>
                                                <a href="{{route('admin.courses.destroy',$course->id)}}"
                                                   class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                <a href="{{route('admin.courses.edit',$course->id)}}"
                                                   class="btn btn-primary btn-sm ml-2">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
