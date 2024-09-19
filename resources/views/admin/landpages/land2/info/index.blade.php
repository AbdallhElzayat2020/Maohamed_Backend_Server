@extends('admin.layouts.master')
@section('title_dashboard', 'Information Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Information Landing Page Two</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{ route('admin.info-2.create') }}">Create New</a>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#ID</th>
                                            <th>العنوان الرئيسي</th>
                                            <th>العنوان التاني</th>
                                            <th>الوصف</th>
                                            <th>الفيديو</th>
                                            <th>تاريخ الاضافة</th>
                                            <th>صلاحيات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($informaitions as $key => $info)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $info->title }}</td>
                                                <td>{{ $info->sub_title }}</td>
                                                <td>{{ $info->description }}</td>
                                                <td>
                                                    @if ($info->video_url)
                                                        <iframe width="200" height="150"
                                                            src="https://www.youtube.com/embed/{{ $info->video_url }}"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen>
                                                        </iframe>
                                                    @else
                                                        <span>No video available</span>
                                                    @endif
                                                </td>


                                                <td>{{ $info->created_at }}</td>
                                                <td class="d-flex align-items-center gap-5">
                                                    <a href="{{ route('admin.info-2.destroy', $info->id) }}"
                                                        class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                    <a href="{{ route('admin.info-2.edit', $info->id) }}"
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
