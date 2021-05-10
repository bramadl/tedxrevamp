<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'ticket_id',
        'payment_method',
        'payment_proof',
        'payment_path',
        'payment_status'
    ];

    public function user () {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function ticket () {
        return $this->belongsTo('App\Ticket', 'ticket_id', 'id');
    }

    public function userTicket () {
        return $this->hasOne('App\UserTicket', 'payment_id', 'id');
    }
}
