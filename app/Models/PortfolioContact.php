<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioContact extends Model
{
    use HasFactory;
        protected $fillable = [
        'user_id',
        'name',
        'email',
        'address',
        'message',
    ];

    /**
     * Define a belongsTo relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(portfolio_users::class, 'user_id', 'id');
    }
}
