<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

    /**
     * related with elements
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function elements()
    {
        return $this->hasMany(Element::class,'form_id','id');
    }
    /**
     * related with values
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function values()
    {
        return $this->hasMany(FormValues::class,'form_id','id');
    }
}
