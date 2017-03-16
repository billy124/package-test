<?php

namespace Butt\Cms\Models;

class Page extends BaseModel {

    const STATUS_ACTIVE = 'Active';

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
    
    /**
     * format the publish date for display purposes
     * 
     * @param string $format
     * @return string
     */
    public function getPublishedDate($format = 'd/m/Y') {
        return date($format, strtotime($this->published_at));
    }
    
    public function getActivePages() {
        return $this->getPagesByStatus(self::STATUS_ACTIVE);
    }
    
    public function getPagesByStatus($status) {
        return self::where('status', $status)->get();
    }

}