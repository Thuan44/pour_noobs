<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'desccription',
        'author',
        'image',
        'price',
        'category_id',
    ];

    /**
     * Get the category of the course.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
