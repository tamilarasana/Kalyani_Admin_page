<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Specname;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spec extends Model
{
    use HasFactory;

    protected $fillable = [
        'specname_id',
        'product_id',
        'value',
        'status',
    ];
    public $timestamps = false;

    public function bike(){
        return $this->belongsTo(Product::class, 'product_id' ,'id');
    }

    public function specName(){
        return $this->belongsTo(Specname::class, 'specname_id','id');
    }
}
