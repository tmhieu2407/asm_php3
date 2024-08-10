<?php
$loaitin = DB::table('categories')->select('id', 'name')->get();
?>

<div class="hed">
    <a class="navbar-brand d-flex align-items-center" href="{{ route('admin.signout') }}">
        <img class="img-fluid me-3" style="margin-left: 60px;" width="120px" height="80px" src="/client/images/logo2.png"
            alt="Reader | Hugo Personal Blog Template" style="margin-left: 50px;">
        <h6 class="mb-0 d-flex align-items-center" style="padding-left: 70%;">
            <i class="bi bi-telephone me-2" style="color:#4FD675">☎ HOTLINE: 0877272498</i>
        </h6>
    </a>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container" style=" background-color: #f8fff8">
        {{-- <a class="navbar-brand" href="index.html">
            <img class="img-fluid" width="100px" height="60px" style="margin-left: 50px" src="/client/images/logo2.png" alt="Reader | Hugo Personal Blog Template">
        </a> --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Trang Chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tin tức bóng đá
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($loaitin as $lt)
                            <li><a class="dropdown-item" href="{{ route('result', [$lt->id]) }}">{{ $lt->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.show') }}">Liên Hệ</a>
                </li>
            </ul>
            <div class="order-2 order-lg-3 d-flex align-items-center">


                <!-- search -->
                <form class="d-flex me-2" action="{{ route('search') }}" method="GET">
                    <input id="search-query" name="s" class="form-control" type="search" placeholder="Tìm Kiếm..." aria-label="Search" value="{{ request()->s }}">
                </form>

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->



                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                {{-- <li> <a class="dropdown-item" href="{{ route('admin.signout') }}">Quản Trị</a></li> --}}
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
<br>


