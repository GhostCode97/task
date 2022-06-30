<!-- {{ config('app.name', 'Laravel') }} -->
@extends('users.layouts.index')
@extends('users.posts.index')
@section('search')
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <form class="d-flex" role="search" action="" method="get">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
@endsection
@section('content')
<aside class="col-md-3 fixed-bottom">
    <div class="chat">
        <div class="collapse" id="navbarToggleExternalChat">
            <ul class="list-group text-black ou-f ">
                <li class="list-group-item">
                    <a href="#">name</a>
                </li>
                <li class="list-group-item">
                    <a href="#">name</a>
                </li>
                <li class="list-group-item">
                    <a href="#">name</a>
                </li>
                <li class="list-group-item">
                    <a href="#">name</a>
                </li>
                <li class="list-group-item">
                    <a href="#">name</a>
                </li>
            </ul>
        </div>
        <nav class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler border-0 text-success" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalChat" aria-controls="navbarToggleExternalChat"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="material-symbols-outlined FILL-1 fs-2">
                        chat
                    </i>
                </button>
            </div>
        </nav>
    </div>
</aside>
<div class="clean-left"></div>
<!--create messege box social media-->
</div>
</div>

@endsection
