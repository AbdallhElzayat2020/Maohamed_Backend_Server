@extends('admin.layouts.master')
@section('title_dashboard', 'Company Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Company Page</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{route('admin.company.create')}}">Create New</a>
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
                                            #ID
                                        </th>
                                        <th>الصورة</th>
                                        <th>تاريخ الاضافة</th>
                                        <th>صلاحيات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $key => $company )
                                        <tr>
                                            <td>
                                                {{$key +1}}
                                            </td>
                                            <td>
                                                <img src="{{asset($company->image)}}" alt="" width="70" height="70">
                                            </td>
                                            <td>{{$company->created_at}}</td>
                                            <td class="d-flex align-items-center gap-5">
                                                <a href="{{route('admin.company.destroy',$company->id)}}"
                                                   class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                <a href="{{route('admin.company.edit',$company->id)}}"
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
