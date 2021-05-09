<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTicket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_ticket_id',
        'token',
        'code',
        'refresh_token'
    ];

    public function payment()
    {
        return $this->belongsTo('App\Payment', 'payment_id', 'id');
    }
}
