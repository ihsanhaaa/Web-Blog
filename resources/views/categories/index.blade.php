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
            <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New category</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Kategori</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
