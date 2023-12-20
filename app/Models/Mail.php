<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Mail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];

}
