<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['receipt_id', 'meetup_point_id', 'status'];

    protected $searchableFields = ['*'];

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }

    public function meetupPoint()
    {
        return $this->belongsTo(MeetupPoint::class);
    }
}
