<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function datafilter()
    {
        return $this->belongsTo(DataFilter::class, "data_filter_id");
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
