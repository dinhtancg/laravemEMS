<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    const PAGINATE_LIMIT = 5;
    protected $fillable = [
        'category_id',
        'title',
        'content',
        'slug',
        'user_id',
        'confirmed',
        'published',
    ];
    /**
     * Get Artilces
     *
     * @param string|null $search
     * @param int|null $cateId
     * @param int|null $status
     * @param date|null $dateForm
     * @param date|null $dateTo
     * @param int|null $cateType
     * @return Article collection
     */
    public static function getIndex($search = null, $cateId = null, $status = null, $dateForm = null, $dateTo = null)
    {
        $query = Article::select('articles.*', 'categories.name')
            ->join('categories', 'articles.cate_id', '=', 'categories.id');
//            ->where('articles.status', '=', is_null($status) ? self::STATUS_ACTIVE : $status);
        if (!empty($categoryId)) {
            $query->where('articles.category_id', '=', $categoryId);
        }
        if (!empty($search)) {
            $query->where('articles.title', 'LIKE', '%'.$search.'%');
        }
        if (!empty($dateForm)) {
            $query->where('articles.created_at', '>=', $dateForm);
        }
        if (!empty($dateTo)) {
            $query->where('articles.created_at', '<=', $dateTo);
        }
        $query->orderBy('articles.id', 'desc');
        return $query->paginate(self::PAGINATE_LIMIT);
    }
}
