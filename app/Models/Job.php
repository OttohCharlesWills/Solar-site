<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'projects';

    
    protected $fillable = [

        'business_name',

        'client_name',

        'phone',

        'email',

        'location',

        'service_type',

        'description',

        'progress',

        'status',

        'start_date',

        'completion_date',

        'assigned_to',

        'amount',

        'created_by'

        ];
}
