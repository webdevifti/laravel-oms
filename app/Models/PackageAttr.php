<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageAttr extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rel_with_packagefeature(){
        return $this->belongsTo(PackageAttr::class, 'package_feature_id');
    }
}
