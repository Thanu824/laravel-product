<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
  protected $primaryKey = 'id';
   protected $fillable = [
        'name',
        'price',
        'quantity',
        'ptype_id',
    ];
    use HasFactory;
    public function ptype()
    {
        return $this->belongsTo(Ptype::class, 'ptype_id');
    }
}
