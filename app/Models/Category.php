<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['name', 'description', 'created_by'];

    // Many-to-1: Category → Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    // 1-to-Many: Category → Items
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
