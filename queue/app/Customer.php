<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    /**
     * Get the Service record associated with the user.
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}

