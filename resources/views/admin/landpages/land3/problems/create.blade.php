@extends('admin.layouts.master')
@section('title_dashboard', 'Problems Land3')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> Problems Land3</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Problems Land3</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.problems-3.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">العنوان الرئيسي </label>
                            <input type="text" value="{{ old('title') }}" required name="title" class="form-control">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
