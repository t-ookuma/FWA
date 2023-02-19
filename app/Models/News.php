<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewsLink;
use App\Models\NewsDocument;
use App\Models\Result;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'noticed_at',
        'title',
        'note',
        'detail',
        'preliminary_report_flag',
        'iframe_path'
    ];

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function news_links()
    {
        return $this->hasMany(NewsLink::class);
    }

    public function news_documents()
    {
        return $this->hasMany(NewsDocument::class);
    }

    /**
     * トップページ用 お知らせ日順 10件
     * 
     * @return collection
     */
    public function getTopNewsList()
    {
        return News::orderBy('noticed_at', 'DESC')->paginate('15');
    }

    public function getBrakingNews()
    {
        return News::where('preliminary_report_flag', 1)->get()->toArray();
    }
}
