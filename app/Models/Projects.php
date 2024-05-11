<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Projects extends Model
{
    use HasFactory, Searchable;
    protected $table = "new_projects";
    public $asYouType = true;
    
}
