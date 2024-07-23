<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementting = true;

    protected $fillable = [
        'username',
        'password',
        'name'
    ];

    public function contacts(): HasMany {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
