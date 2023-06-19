<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['user_id', 'name','receipt_id'];

    protected $searchableFields = ['*'];

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
    
}
