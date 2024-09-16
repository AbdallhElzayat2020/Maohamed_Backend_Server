@extends('admin.layouts.master')
@section('title_dashboard', 'Orders Page')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header d-flex justify-content-between align-items-center">
                <h1>Orders Page</h1>
                {{-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="orderStatusFilter"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter by Status
                    </button>
                    <div class="dropdown-menu" aria-labelledby="orderStatusFilter">
                        <a class="dropdown-item"
                            href="{{ route('admin.orders.index', ['status' => 'pending']) }}">Pending</a>
                        <a class="dropdown-item"
                            href="{{ route('admin.orders.index', ['status' => 'canceled']) }}">Canceled</a>
                        <a class="dropdown-item"
                            href="{{ route('admin.orders.index', ['status' => 'completed']) }}">Completed</a>
                        <a class="dropdown-item" href="{{ route('admin.orders.index') }}">All Orders</a>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#ID</th>
                                            <th> Client Name</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    {{ $order->name }}
                                                </td>
                                                <td>
                                                    {{ $order->email }}
                                                </td>
                                                <td>
                                                    {{ $order->created_at }}
                                                </td>
                                                <td>
                                                    {{ $order->subject }}
                                                </td>
                                                <td>
                                                    {{ $order->phone }}
                                                </td>
                                                <td>
                                                    {{ $order->message }}
                                                </td>
                                                <td class="d-flex align-items-center gap-5">
                                                    <a href="{{ route('admin.orders.destroy', $order->id) }}"
                                                        class="btn btn-danger btn-sm mr-2 delete-item">Delete</a>
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
