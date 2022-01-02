<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\QueryBuilders\ArticleBuilder;

class ArticlesController extends Controller
{
    public function index(ArticleBuilder $query)
    {
        return $query->paginate();
    }
}
