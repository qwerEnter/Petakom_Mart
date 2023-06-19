<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{

    public $timestamps = false;
    

    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['receipt_id', 'meetup_point_id', 'status'];

    protected $searchableFields = ['*'];

    

    public function meetupPoint()
    {
        return $this->belongsTo(MeetupPoint::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
