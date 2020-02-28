<?php

namespace App\Http\Controllers\Front\Blog;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\FrontController;
use App\Services\Front\Blog\BlogService;
use Illuminate\Http\Request;

class BlogController extends FrontController
{
    private $blogServise;

    public function __construct(BlogService $blogService)
    {
        $this->blogServise = $blogService;
    }

    public function showNews()
    {
        $news = $this->blogServise->getListNews();
        dd($news);
    }

    public function searchNews($slug)
    {
        $news = $this->blogServise->getShowNews($slug);
        dd($news);
    }
}
