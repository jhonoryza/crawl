<?php

namespace App\QueryBuilders;

use App\Articles;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class ArticleBuilder extends Builder
{
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(Articles::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'articles.id',
            'articles.source_id',
            'articles.original_id',
            'articles.title',
            'articles.slug',
            'articles.link',
            'articles.date_pub',
            'articles.date_mod',
            'articles.content',
            'articles.excerpt',
            'articles.image',
            'articles.featured',
            'articles.created_at',
            'articles.updated_at',
            'source.id',
            'source.name',
            'source.slug',
            'source.active',
            'source.wordpress_api_url',
        ];
    }

    /**
     * Get a list of allowed columns that can be used in any filter operations.
     *
     * @return array
     */
    protected function getAllowedFilters(): array
    {
        return [
            AllowedFilter::exact('id'),
            AllowedFilter::exact('source_id'),
            'original_id',
            'title',
            'slug',
            'link',
            AllowedFilter::exact('date_pub'),
            AllowedFilter::exact('date_mod'),
            'content',
            'excerpt',
            'image',
            AllowedFilter::exact('featured'),
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('articles.id'),
            AllowedFilter::exact('articles.source_id'),
            'articles.original_id',
            'articles.title',
            'articles.slug',
            'articles.link',
            AllowedFilter::exact('articles.date_pub'),
            AllowedFilter::exact('articles.date_mod'),
            'articles.content',
            'articles.excerpt',
            'articles.image',
            AllowedFilter::exact('articles.featured'),
            AllowedFilter::exact('articles.created_at'),
            AllowedFilter::exact('articles.updated_at'),
            AllowedFilter::exact('source.id'),
            'source.name',
            'source.slug',
            AllowedFilter::exact('source.active'),
            'source.wordpress_api_url',
        ];
    }

    /**
     * Get a list of allowed relationships that can be used in any include operations.
     *
     * @return string[]
     */
    protected function getAllowedIncludes(): array
    {
        return [
            'source',
            'articlesAuthors',
            'articlesCategories',
            'authors',
            'categories',
        ];
    }

    /**
     * Get a list of allowed searchable columns which can be used in any search operations.
     *
     * @return string[]
     */
    protected function getAllowedSearch(): array
    {
        return [
            'original_id',
            'title',
            'slug',
            'link',
            'content',
            'excerpt',
            'image',
            'source.name',
            'source.slug',
            'source.wordpress_api_url',
        ];
    }

    /**
     * Get a list of allowed columns that can be used in any sort operations.
     *
     * @return string[]
     */
    protected function getAllowedSorts(): array
    {
        return [
            'id',
            'source_id',
            'original_id',
            'title',
            'slug',
            'link',
            'date_pub',
            'date_mod',
            'content',
            'excerpt',
            'image',
            'featured',
            'created_at',
            'updated_at',
        ];
    }

    /**
     * Get the default sort column that will be used in any sort operation.
     *
     * @return string
     */
    protected function getDefaultSort(): string
    {
        return 'id';
    }
}
