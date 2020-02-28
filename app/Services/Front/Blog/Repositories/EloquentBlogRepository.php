<?php


namespace App\Services\Front\Blog\Repositories;


use App\Models\Blog;

class EloquentBlogRepository
{
    public function allNews()
    {
        $colums = ['id', 'name', 'slug', 'anons'];
        $result = Blog::orderBy('id', 'DESC')
            ->select($colums)
            ->paginate(config('front_paginate.blog'));
        return $result;
    }

    public function findNews($slug)
    {
        $colums = ['id', 'name', 'slug', 'description', 'seo_title', 'seo_description', 'seo_keywords'];
        $result = Blog::where('slug', $slug)
            ->select($colums)
            ->firstOrFail();
        return $result;
    }
}
