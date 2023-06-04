<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeetupPoint extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['location'];

    protected $searchableFields = ['*'];

    protected $table = 'meetup_points';

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
