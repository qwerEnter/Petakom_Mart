<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Scopes\Searchable;

class Schedule extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $table = 'schedules'; 
    protected $fillable = ['name','matric_no', 'employment_type', 'day', 'time','time_id'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date' => 'date',
    ];

    public function cashFlows()
    {
        return $this->hasMany(CashFlow::class);
    }
}
