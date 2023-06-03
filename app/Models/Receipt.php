<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receipt extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['subtotal', 'status'];

    protected $searchableFields = ['*'];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}
