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
                    <form action="{{ route('admin.subscribe.update', $subscribe->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Before Subscription Fields -->
                        <h3>Before Subscription</h3>
                        <div class="form-group">
                            <label for="title1_before">Title 1 Before</label>
                            <input type="text" name="title1_before" value="{{ $subscribe->title1_before }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title2_before">Title 2 Before</label>
                            <input type="text" name="title2_before" value="{{ $subscribe->title2_before }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title3_before">Title 3 Before</label>
                            <input type="text" name="title3_before" value="{{ $subscribe->title3_before }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title4_before">Title 4 Before</label>
                            <input type="text" name="title4_before" value="{{ $subscribe->title4_before }}"
                                class="form-control" required>
                        </div>

                        <!-- After Subscription Fields -->
                        <h3>After Subscription</h3>
                        <div class="form-group">
                            <label for="title1_after">Title 1 After</label>
                            <input type="text" name="title1_after" value="{{ $subscribe->title1_after }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title2_after">Title 2 After</label>
                            <input type="text" name="title2_after" value="{{ $subscribe->title2_after }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title3_after">Title 3 After</label>
                            <input type="text" name="title3_after" value="{{ $subscribe->title3_after }}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title4_after">Title 4 After</label>
                            <input type="text" name="title4_after" value="{{ $subscribe->title4_after }}"
                                class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                </div>
            </div>
        </section>
    </div>
@endsection
