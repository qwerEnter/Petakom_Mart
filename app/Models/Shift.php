<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shift extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'shifts'; 

    protected $fillable = ['user_id', 'name','matric_no', 'employment_type','employee_id', 'date', 'time'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date' => 'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function cashFlows()
    {
        return $this->hasMany(CashFlow::class);
    }
}
