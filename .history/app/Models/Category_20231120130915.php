<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'parent_id', 'slug'];
    // Trong model Category
    public function updateCategory($data)
    {
        // Phương thức update của model
        return $this->update($data);
    }
}
