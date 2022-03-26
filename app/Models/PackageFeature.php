<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageFeature extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function rel_with_packageAtt(){
        return $this->belongsTo(PackageAttr::class, 'package_feature_id');
    }
}
