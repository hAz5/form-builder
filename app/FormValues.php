<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormValues extends Model
{

    /**
     * related with form
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function form()
    {
        return $this->belongsTo(Form::class,'form_id','id');
    }

    /**
     * related with element
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function element()
    {
        return $this->belongsTo(Element::class,'element_id','id');
    }

}
