<?php

namespace Butt\Cms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BaseModel extends Model {

    use SoftDeletes;

    protected $hidden = [];
    protected $dates = ['deleted_at'];
    protected $appends = [];
    
    public function messages() {
        return [];
    }

    public function rules() {
        return [];
    }

}