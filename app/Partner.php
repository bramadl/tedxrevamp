<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'avatar',
        'name',
        'role'
    ];

    public function socialMedia()
    {
        return $this->hasMany('App\PartnerSocialMedia', 'partner_id', 'id');
    }
}
