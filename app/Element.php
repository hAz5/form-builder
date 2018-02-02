<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{

    /**
     * related with values
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function values()
    {
        return $this->hasMany(FormValues::class,'element_id','id');
    }

}
