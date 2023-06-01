<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function User(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = ['id','user_id','product_id','address','phone_number'];
}
