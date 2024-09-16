@extends('admin.layouts.master')
@section('title_dashboard', 'Products Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Products Page</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{ route('admin.products.create') }}">Create New</a>
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
                                            <th>اسم المنتج</th>
                                            <th>وصف المنتج</th>
                                            <th>السعر</th>
                                            <th>الصورة</th>
                                            <th>الملف</th>
                                            <th>تاريخ الاضافة</th>
                                            <th>صلاحيات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    {{ $product->name }}
                                                </td>
                                                <td>
                                                    {{ $product->description }}
                                                </td>
                                                <td>
                                                    {{ $product->price }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                                                        width="70" height="70">
                                                </td>
                                                <td>
                                                    <a target="_blank" href="{{ asset('storage/' . $product->file_path) }}"
                                                        download>
                                                        <i class="fas fa-download"></i> Download
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ $product->created_at }}
                                                </td>
                                                <td class="d-flex align-items-center gap-5">
                                                    <a href="{{ route('admin.products.destroy', $product->id) }}"
                                                        class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                    <a href="{{ route('admin.products.edit', $product->id) }}"
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
