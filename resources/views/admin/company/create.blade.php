@extends('admin.layouts.master')
@section('title_dashboard','Create Company')
@section('content')
    <div class="main-content">

        <section class="section">
            <div class="section-header">
                <h1>انشاء شركة جديدة</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>انشاء شركة جديدة</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.company.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">اختر لوجو او صورة الشركة</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
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
