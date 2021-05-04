<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, mixed $article_id)
 * @property mixed titre
 * @property mixed description
 */
class Article extends Model
{
    protected $connection = 'data';
    protected $table = 'articles';
    protected $dates = ['created_at', 'updated_at'];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
