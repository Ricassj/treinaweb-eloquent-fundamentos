<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Mapeia o relacionamento com o model details
     *
     * @return void
     */
    public function details()
    {
        return $this->hasOne('App\Details', 'post_id', 'codigo');
    }

}
