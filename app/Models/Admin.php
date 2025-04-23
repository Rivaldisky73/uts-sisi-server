<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admins';
    protected $fillable = ['username', 'email', 'password'];

    // 1-to-Many: Admin → Items
    public function items()
    {
        return $this->hasMany(Item::class, 'created_by');
    }

    // 1-to-Many: Admin → Categories
    public function categories()
    {
        return $this->hasMany(Category::class, 'created_by');
    }

    // 1-to-Many: Admin → Suppliers
    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'created_by');
    }
}
