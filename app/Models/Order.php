<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'deliveryman_id',
        'supervisor_id',
        'price',
        'address',
        'delivered',
    ];

    protected $table = 'order';

    public function supervisor()
    {
        return $this->belongsTo(User::class,'supervisor_id');
    }

    public function deliveryman()
    {
        return $this->belongsTo(User::class,'deliveryman_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }



}
