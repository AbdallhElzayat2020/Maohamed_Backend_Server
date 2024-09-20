@extends('admin.layouts.master')
@section('title_dashboard', 'Problems Land 3')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Problems Problems Land 3</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{ route('admin.problems-3.create') }}">Create New</a>
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
                                            <th>عنوان المشكلة</th>
                                            <th>تاريخ الاضافة</th>
                                            <th>صلاحيات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($problems as $key => $problem)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $problem->title }}</td>
                                                <td>{{ $problem->created_at }}</td>
                                                <td class="d-flex align-items-center gap-5">
                                                    <a href="{{ route('admin.problems-3.destroy', $problem->id) }}"
                                                        class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                    <a href="{{ route('admin.problems-3.edit', $problem->id) }}"
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
