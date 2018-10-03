<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact_first_name',
        'contact_last_name',
        'contact_email',
        'contact_phone',
        'contact_notes',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
