<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalUser extends Model
{
      use HasFactory;

    protected $table = "medical_users";

    /**
     * Define a hasMany relationship with the Contact model.
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class, 'user_id', 'id');
    }

    // In User Model
public function orders()
{
    return $this->hasMany(Order::class, 'user_id', 'id');  // user_id is the foreign key in orders table
}

}
