<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ManageInventory;

class Inventory extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $table = 'inventories';

    protected $fillable = ['product_id', 'expired_date', 'quantity', 'name', 'price','description'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'expired_date' => 'date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
