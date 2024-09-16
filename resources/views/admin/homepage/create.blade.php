@extends('admin.layouts.master')
@section('title_dashboard','Create Banner')
@section('content')
    <div class="main-content">

        <section class="section">
            <div class="section-header">
                <h1>Create Home Banner</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Create Home Banner</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.homepage.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input class="form-control" name="title" type="text">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input name="description" id="description" type="text" class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
