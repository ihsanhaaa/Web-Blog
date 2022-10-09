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
    <div class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a>
                </li>
                <li><a href="{{ route('posts.index') }}">Manage Post</a>
                </li>
                <li>Detail</li>
                <li class="active">{{ $post->name }}</li>
            </ol>
        </div>
    </div>
    <!-- Main Content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="col-lg-10 mx-md-auto ">
                <article class="post">
                    <h1 class="text-center">{{ $post->name }}</h1>
                    <div class="text-center">
                        <p>Created : {{ $post->created_at->format('M d, Y') }} | Last Updated:
                            {{ $post->updated_at->format('M d, Y') }}</p>
                    </div>
                    <img src="{{ asset('img/test.png') }}" class="d-block w-100">
                    <br>
                    <p>{{ $post->detail }}</p>
                </article>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('posts.index') }}">Kembali</a>
        </div>
        <div class="feedback text-center pt-5">
            <div class="container">
                <div class="col-lg-8 mx-md-auto">
                    <p><span class="count">Apakah artikel ini berguna?</span>
                        <a class="feedback-btn" href="#"><span class="icon-yes"></span>
                        </a> <a class="feedback-btn" href="#"><span class="icon-not"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
