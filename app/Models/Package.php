<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function rel_with_modes(){
        return $this->belongsTo(PackageMode::class, 'mode_id');
    }
}
