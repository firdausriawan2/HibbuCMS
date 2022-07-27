@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Posts</h1>
                <div class="section-header-button">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></div>
                    <div class="breadcrumb-item">All Posts</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Posts</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            data-checkbox-role="dad" class="custom-control-input"
                                                            id="checkbox-all">
                                                        <label for="checkbox-all"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-2">
                                                            <label for="checkbox-2"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $post->title }}
                                                        <div class="table-links">
                                                            <a href="#">View</a>
                                                            <div class="bullet"></div>
                                                            <a href="#">Edit</a>
                                                            <div class="bullet"></div>
                                                            <a href="#" class="text-danger">Trash</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="#">{{ implode(',', optional($post->categories->pluck('name'))->toArray()) }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            <img alt="image"
                                                                src="{{ asset('BackEnd/assets/img/avatar/avatar-5.png') }}"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="">
                                                            <div class="d-inline-block ml-1">
                                                                {{ $post->user->first_name . ' ' . $post->user->last_name }}
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                                    <td>
                                                        @if ($post->status == 'Published')
                                                            <div class="badge badge-primary">{{ $post->status }}</div>
                                                        @elseif ($post->status == 'Pending')
                                                            <div class="badge badge-warning">{{ $post->status }}</div>
                                                        @elseif ($post->status == 'Draft')
                                                            <div class="badge badge-secondary">{{ $post->status }}</div>
                                                        @else
                                                            <div class="badge badge-danger">{{ $post->status }}</div>
                                                        @endif
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
        </section>
    </div>
@endsection
@push('CSS')
    <link rel="stylesheet" href="{{ asset('BackEnd/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('BackEnd/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endpush
@push('JS')
    <script src="{{ asset('BackEnd/assets/js/page/modules-datatables.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('BackEnd/node_modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('BackEnd/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('BackEnd/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
@endpush
