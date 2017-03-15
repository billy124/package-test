<?php

namespace Butt\Cms\Models;

class Page extends BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['path', 'value'];

    /**
     * Set model validation rules.
     * 
     * @return array
     */
    public function rules() {
        return [
            'path' => 'required|max:255|unique:' . $this->getTable() . ',path,' . $this->id
        ];
    }

}