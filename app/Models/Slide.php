<?php

namespace App\Models;

class Slide extends BaseModel
{
    protected $table = 'slides';
    protected $fillable = [];

    const CACHE_TAG = 'slides';


    public function getLink()
    {
        return $this->t('url') ? geturl($this->t('url')) : geturl($this->url);
    }
}
