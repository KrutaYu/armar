<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCharacteristics extends Model
{
    use HasFactory;

    protected $table = 'product_characteristics';

    protected $fillable = ['product_id', 'color_id', 'size_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
