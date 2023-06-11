<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CashFlow extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['shift_id', 'opening_cash', 'closing_cash'];

    protected $searchableFields = ['*'];

    protected $table = 'cash_flows';

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
}
