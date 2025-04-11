<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public const ADMIN = 'Admin';
    public const USER = 'User';
    public const SUPER_ADMIN = 'Superadmin';
}
