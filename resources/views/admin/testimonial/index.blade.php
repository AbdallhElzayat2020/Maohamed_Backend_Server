@extends('admin.layouts.master')
@section('title_dashboard', 'testimonial Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>testimonial Page</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{route('admin.testimonial.create')}}">Create New</a>
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
                                        <th>اسم العميل</th>
                                        <th>اللقب او اسم الشركة</th>
                                        <th>تاريخ الاضافة</th>
                                        <th>الوصف</th>
                                        <th>الصورة</th>
                                        <th>صلاحيات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($testimonials as $key => $testimonial )
                                        <tr>
                                            <td>
                                                {{$key +1}}
                                            </td>
                                            <td>
                                                {{$testimonial->name}}
                                            </td>
                                            <td>
                                                {{$testimonial->nickname}}
                                            </td>
                                            <td>
                                                {{$testimonial->created_at}}
                                            </td>
                                            <td>
                                                {{$testimonial->description}}
                                            </td>


                                            <td>
                                                <img src="{{asset($testimonial->image)}}" alt="" width="70" height="70">
                                            </td>
                                            <td class="d-flex align-items-center gap-5">
                                                <a href="{{route('admin.testimonial.destroy',$testimonial->id)}}"
                                                   class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                <a href="{{route('admin.testimonial.edit',$testimonial->id)}}"
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
