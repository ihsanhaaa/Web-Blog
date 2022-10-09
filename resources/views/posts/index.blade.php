@extends('layouts.app')

@section('content')
    <div class="search-section">
        <div class="masthead single-masthead">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-md-auto">
                        <form>
                            <input type="text" class="search-field" placeholder="Search Something ... ">
                            <button type="submit"><i class="icon icon-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a>
                </li>
                <li class="active">Blog</li>
            </ol>
        </div>
    </div>

    <div class="container my-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="mb-3">
            @can('post-create')
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            @endcan
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Post</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->created_at->format('M d, Y') }}</td>
                        <td>
                            @can('post-confirm')
                                @if (!$post->is_progress)
                                    <form action="{{ route('posts.confirm', $post->id) }}" method="post"
                                        onclick="return confirm('Apakah anda yakin ingin mengkonfirmasi ini?')">
                                        @csrf
                                        <button class="btn btn-success"><i
                                                class="fas fa-check-circle"></i>&nbsp;Konfirmasi</button>
                                    </form>
                                @endif
                            @endcan
                        </td>
                        <td><img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-responsive" />
                        </td>
                        <td>
                            <a class="badge bg-info text-dark" href="{{ route('posts.show', $post->id) }}">Show</a>
                            @can('post-edit')
                                <a class="badge bg-primary text-dark" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            @endcan
                            @can('post-delete')
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge bg-danger" style="border: none;">Delete</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
