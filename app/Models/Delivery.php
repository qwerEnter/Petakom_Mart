<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{
<<<<<<< HEAD
    public $timestamps = false;
    
=======
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
>>>>>>> 306b0884018c0fa3122b5d49135e1e9473e5b54d
}
