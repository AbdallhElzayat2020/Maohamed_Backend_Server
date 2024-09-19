@extends('admin.layouts.master')
@section('title_dashboard', 'Subscribe LandTwo')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> Subscribe LandTwo</h1>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Subscribe LandTwo</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.subscribe-2.store') }}" method="POST">
                        @csrf
                        <!-- Before Subscription Fields -->
                        <h3>Before Subscription</h3>
                        <div class="form-group">
                            <label for="title1_before">Title 1 Before</label>
                            <input type="text" name="title1_before" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title2_before">Title 2 Before</label>
                            <input type="text" name="title2_before" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title3_before">Title 3 Before</label>
                            <input type="text" name="title3_before" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title4_before">Title 4 Before</label>
                            <input type="text" name="title4_before" class="form-control" required>
                        </div>

                        <!-- After Subscription Fields -->
                        <h3>After Subscription</h3>
                        <div class="form-group">
                            <label for="title1_after">Title 1 After</label>
                            <input type="text" name="title1_after" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title2_after">Title 2 After</label>
                            <input type="text" name="title2_after" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title3_after">Title 3 After</label>
                            <input type="text" name="title3_after" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title4_after">Title 4 After</label>
                            <input type="text" name="title4_after" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
