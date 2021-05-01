<?php

namespace App\Models;

class InfoBlock extends BaseModel
{
    protected $table = 'info_blocks';
    protected $fillable = [];

    const CACHE_TAG = 'tb_tree';

    public function tree()
    {
        $this->belongsTo(Tree::class, 'tb_tree_id', 'id');
    }

}
