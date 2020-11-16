<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function gallery()
    {
        return $this->belongsTo(Section::class, "section_id");
    }
}
