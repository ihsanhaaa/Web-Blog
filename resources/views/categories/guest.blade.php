@extends('layouts.app')


@section('content')
    <main class="page">
        <div class="search-section">
            <div class="container">
                <h1>Documentations
                    <small>version: 1.0</small>
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="main-sidebar ">
                        <div class="">
                            <section class="sidebar p-t-b-40">

                                <ul class="sidebar-menu scroll">
                                    <li>
                                        <a href="#introduction">
                                            <i class="icon icon-smiling-face"></i> <span>Introduction</span>
                                        </a>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon icon-folders"></i>
                                            <span>Files & Folders</span>
                                            <span class="badge badge-primary pull-right">4</span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#structure"><i class="icon icon-circle-o"></i> Directory
                                                    Structure</a>
                                            </li>
                                            <li><a href="#partials"><i class="icon icon-folder5"></i>Partials</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <!-- /.sidebar -->
                    </aside>
                </div>
                <article class="col-md-9 p-b-40 b-l p-40">
                    <section class="topics">
                        <div class="container">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <a href="/postingan/{{ $post->slug }}">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="topics-wrapper border-style">
                                                <h3><span class="icon icon-circle-o text-blue"></span>Judul
                                                </h3>
                                                <ul class="topics-list">
                                                    <li><a href="#"> How to use this documentation? </a>
                                                    </li>
                                                </ul>
                                                <ul class="topics-meta">
                                                    <a href="/postingan/{{ $post->slug }}">
                                                        <li>Lihat Berita</li>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </div>
    </main>
@endsection
