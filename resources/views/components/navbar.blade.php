<nav class="mainnav navbar navbar-default justify-content-between">
    <div class="container relative">
        <a class="offcanvas dl-trigger paper-nav-toggle" data-toggle="offcanvas" aria-expanded="false"
            aria-label="Toggle navigation">
            <i></i>
        </a>
        <a class="navbar-brand" href="index.html">
            <img class="d-inline-block align-top" alt="" src="{{ asset('img/basic/logo.png') }}">
        </a>
        <div class="paper_menu">
            <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                <ul class="dl-menu align-items-center">



                    <li><a href="{{ url('/') }}">Home</a></li>

                    <!-- Authentication Links -->
                    @guest
                        <li><a href="/postsingan">Postsingan</a></li>
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="btn btn-default nav-btn">Sign
                                    Up</a>
                            </li>
                        @endif
                    @else
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('categories.index') }}">Kategori</a></li>
                        <li><a href="{{ route('users.index') }}">Manage Users</a></li>
                        <li><a href="{{ route('roles.index') }}">Manage Role</a></li>
                        <li><a href="{{ route('posts.index') }}">Manage Post</a></li>
                        <li><a href="#">Hai, {{ Auth::user()->name }}</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
            <!-- Login modal -->
        </div>
    </div>
</nav>
