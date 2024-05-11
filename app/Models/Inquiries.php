<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{
    use HasFactory;

    protected $table = "inquiry";

    protected $fillable = [
        'ad_id',
        'ad_name',
        'name',
        'phone',
        'email',
        'message',
        'type',
        'ad_type',
    ];
}
