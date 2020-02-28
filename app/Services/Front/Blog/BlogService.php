<?php


namespace App\Services\Front\Blog;


use App\Services\Front\Blog\Repositories\EloquentBlogRepository;

class BlogService
{
    private $blogEloquent;

    public function __construct(EloquentBlogRepository $blogEloquent)
    {
        $this->blogEloquent = $blogEloquent;
    }

    public function getListNews()
    {
        return $this->blogEloquent->allNews();
    }

    public function getShowNews($slug)
    {
        return $this->blogEloquent->findNews($slug);
    }
}
