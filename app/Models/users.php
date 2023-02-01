<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    public $table="users";
    protected $fillable=[
        "name",
        "password",
        "id"

    ];
    protected $hidden=[
        "updated_at",
        "created_at"
    ];
}