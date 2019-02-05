<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SalesForm extends Authenticatable
{

    protected $table  = "sales_form";
    protected $with = ['user'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contact_name', 'contact_number', 'user_id','deal_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
