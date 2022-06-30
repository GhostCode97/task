<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Users\PostsController;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    protected  $postsController;
    public function __construct(PostsController $postsController)
    {
        $this->postsController = $postsController;
    }
    public function index()
    {
        //get PostsController

        //get all posts from model in db
        $posts = $this->postsController->index();
        return $posts;
    }
    public function show($id)
    {

    }

}
