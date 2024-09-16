@extends('admin.layouts.master')
@section('title_dashboard', 'Team Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Team Page</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a @class(['btn-primary btn']) href="{{route('admin.team.create')}}">Create New</a>
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
                                        <th>Person Name</th>
                                        <th>Description or Job</th>
                                        <th>Img</th>
                                        <th>Facebook Link</th>
                                        <th>X Link</th>
                                        <th>Instagram Link</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($teams as $key => $team )
                                        <tr>
                                            <td>
                                                {{$key +1}}
                                            </td>
                                            <td>
                                                {{$team->name}}
                                            </td>

                                            <td>
                                                {{$team->description}}
                                            </td>
                                            <td>
                                                <img width="70" height="70" src="{{asset($team->image)}}" alt="">
                                            </td>
                                            <td>
                                                {{$team->facebook_link}}
                                            </td>
                                            <td>
                                                {{$team->x_link}}
                                            </td>
                                            <td>
                                                {{$team->instagram_link}}
                                            </td>
                                            <td>
                                                {{$team->created_at}}
                                            </td>


                                            <td class="d-flex align-items-center gap-5">
                                                <a href="{{route('admin.team.destroy',$team->id)}}"
                                                   class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
                                                <a href="{{route('admin.team.edit',$team->id)}}"
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
