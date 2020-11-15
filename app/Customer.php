<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [
        'name', 'email', 'phone', 'address', 'shopname', 'photo', 'bank_name','bank_acc_number','bank_branch', 'nid_no', 'city'
    ];
}
