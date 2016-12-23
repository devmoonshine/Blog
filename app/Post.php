<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{
    public function author()
    {
    	return $this->belongsTo(Author::class);
    }

    /**
     *  Uses Route model binding to define a record by it's return value (column)
     *
     * @return string
     */
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }

    public function scopeLatestFirst($query) {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeIsLive($query) {
        return $query->where('live', true);
    }

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
