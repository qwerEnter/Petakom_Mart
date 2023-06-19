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

    //inside database meetup_points
    protected $fillable = ['location'];
    //database name
    protected $table = 'meetup_points';


    
    protected $searchableFields = ['*'];

    

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }


}
