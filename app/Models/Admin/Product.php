<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
//declare const variable
    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;
}
