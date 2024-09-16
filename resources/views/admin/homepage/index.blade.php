@extends('admin.layouts.master')
@section('title_dashboard', 'Homepage')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>الواجهة الرئيسية</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{route('admin.homepage.create')}}">Create New</a>
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
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>الاسم</th>
                                        <th>الوصف</th>
                                        <th>تاريخ الاضافة</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($banners as $key => $banner )
                                        <tr>
                                            <td>
                                                {{$key +1}}
                                            </td>
                                            <td>{{$banner->title}}</td>
                                            <td class="align-middle">
                                                {{$banner->description}}
                                            </td>
                                            <td>{{$banner->created_at}}</td>
                                            <td class="d-flex align-items-center gap-5">
                                                <a href="{{route('admin.homepage.destroy',$banner->id)}}"
                                                   class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                <a href="{{route('admin.homepage.edit',$banner->id)}}"
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
