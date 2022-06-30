@section('posts')
<section class="post-group">
@foreach ($posts as $post )
<div class="card  m-lg-2" id="post">
        <div class="card-header bg-success bg-opacity-75 position-relative  ">
            <div class="d-flex justify-content-start">
                <div class="p-2">
                    <img src="assets/ammar.jpg" alt="Avatar" style="width:30px; height: 30px;" class="rounded-pill">
                </div>
                <div class="p-2">
                    <!--link to profile-->
                    <a href="#" class="navbar-brand text-white">
                        <h5 class="text-white">Ammar</h5>
                    </a>
                </div>

            </div>
            <div class="more_horiz position-absolute top-50 end-0 translate-middle-y">
                <div class="btn-group">
                    <button type="button" class="border-0 text-white bg-success bg-opacity-10" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="material-symbols-outlined">
                            more_horiz
                        </i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <img src="..." class="card-img-top" alt="...">
            <p>
                {{$post->content}}
            </p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between">

            <div class="favorite">
                <button type="button" class="border-0 text-success" id="favorite" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="material-symbols-outlined FILL-0">
                        favorite
                    </i>

                </button>
                <label for="favorite" class="text-success pb-2 fs-5">Like</label>
            </div>
            <div class="commit">
                <button type="button" class="border-0 text-success" id="comment" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="material-symbols-outlined FILL-0">
                        comment
                    </i>
                </button>
                <label for="comment" class="text-success pb-2 fs-5">Comment</label>

            </div>
            <div class="add_box">
                <button type="button" class="border-0 text-success" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-symbols-outlined FILL-0">
                        add_box
                    </i>
                    <i class="material-symbols-outlined FILL-1">
                        done_outline
                    </i>
                </button>
            </div>
        </div>
    </div>
@endforeach
</section>
@endsection
