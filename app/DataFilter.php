<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataFilter extends Model
{
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
