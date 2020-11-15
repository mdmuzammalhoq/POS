<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'company', 'type', 'photo', 'account_holder', 'bank_name','bank_acc_number','branch_name','city'
    ];
}
