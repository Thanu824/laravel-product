<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptype extends Model
{
    protected $table = 'ptypes';
  protected $primaryKey = 'id';
   protected $fillable = [
        'name',
        'description',
    ];
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class, 'ptype_id');
    }
}
