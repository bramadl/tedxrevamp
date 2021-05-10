<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerSocialMedia extends Model
{
    protected $fillable = [
        'partner_id',
        'tag',
        'url'
    ];

    public function partner()
    {
        return $this->belongsTo('App\Partner', 'partner_id', 'id');
    }
}
