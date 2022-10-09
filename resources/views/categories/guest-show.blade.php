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
                    <section id="introduction">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-smiling-face"></i> Introduction</h4>
                                <hr>
                                <p>
                                    Thank you for purchasing this template. We covered almost everything in this document
                                    that
                                    how easily you can setup. If you have any questions that
                                    are beyond the scope of this help file, please feel free to contact us..
                                </p>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </div>
    </main>
@endsection
