<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{
   use HasFactory;

   protected $table = 'user_rol';

   protected $fillable = [
    'id_user',
    'id_role'
   ];

   public function user()
   {
       return $this->belongsTo(User::class, 'id_user');
   }

   public function role()
   {
       return $this->belongsTo(Role::class, 'id_role');
   }
}
