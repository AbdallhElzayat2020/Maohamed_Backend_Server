@extends('admin.layouts.master')
@section('title_dashboard', 'Subscribe Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Subscribe Landing Page</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{ route('admin.subscribe.create') }}">Create New</a>
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
                                            <th>المشكلة الاولي</th>
                                            <th>المشكلة التانية</th>
                                            <th>المشكلة التالتة</th>
                                            <th>المشكلة الرابعة</th>
                                            <th>الميزة الاولي</th>
                                            <th>الميزة التانية</th>
                                            <th>الميزة التالتة</th>
                                            <th>الميزة الرابعة</th>
                                            <th>تاريخ الاضافة</th>
                                            <th>صلاحيات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subscribes as $key => $subscribe)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $subscribe->title1_after }}</td>
                                                <td>{{ $subscribe->title2_after }}</td>
                                                <td>{{ $subscribe->title3_after }}</td>
                                                <td>{{ $subscribe->title4_after }}</td>
                                                <td>{{ $subscribe->title1_before }}</td>
                                                <td>{{ $subscribe->title2_before }}</td>
                                                <td>{{ $subscribe->title3_before }}</td>
                                                <td>{{ $subscribe->title4_before }}</td>
                                                <td>{{ $subscribe->created_at }}</td>
                                                <td class="d-flex align-items-center gap-5">
                                                    <a href="{{ route('admin.subscribe.destroy', $subscribe->id) }}"
                                                        class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                    <a href="{{ route('admin.subscribe.edit', $subscribe->id) }}"
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
