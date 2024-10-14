<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserRole;

class User extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'email',
    'password',
    'user_role_id',
  ];

  public function role()
  {
    return $this->belongsTo(UserRole::class);
  }
}
