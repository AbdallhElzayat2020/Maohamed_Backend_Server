@extends('admin.layouts.master')
@section('title_dashboard', 'Edit Information')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Information</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Edit Information</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.features-3.update', $feature->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">العنوان الرئيسي</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $feature->title) }}"
                                required class="form-control">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">تحديث</button>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
