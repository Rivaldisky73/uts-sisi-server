<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $fillable = ['name', 'contact_info', 'created_by'];

    // Many-to-1: Supplier → Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    // 1-to-Many: Supplier → Items
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
