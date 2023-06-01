<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   protected $fillable = ['id','name','price','description','category_id','comment_id','photo'];

    public function Category(): belongsTo
    {
        return $this->belongsTo(Category::class);
   }
   public function Comment(): hesMany
    {
        return $this->hasMany(Comment::class);
   }

}
