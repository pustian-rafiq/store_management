<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends = [
        'text',
    ];


    public function getTextAttribute(){
        return $this->category_name;
    }
}
