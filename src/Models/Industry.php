<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{

    /**
     * 是否主动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 父级
     */
    public function parent()
    {
        return $this->belongsTo(Industry::class, 'parent_id', 'industry_id');
    }

    /**
     * 子级
     */
    public function childrens()
    {
        return $this->hasMany(Industry::class, 'parent_code', 'industry_id');
    }
}
