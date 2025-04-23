<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'category_id',
        'supplier_id',
        'created_by'
    ];

    // Many-to-1: Item → Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Many-to-1: Item → Supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // Many-to-1: Item → Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
