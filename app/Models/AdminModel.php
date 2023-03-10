<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminModel extends Authenticatable
{
    use HasFactory;
    protected $table= 'admin';
    protected $fillable = ['email','password'];
    protected $hidden = ['password'];

}
