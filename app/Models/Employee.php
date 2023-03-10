<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function account()
    {
        return $this->belongsTo(Account::class, "account_id", "account_id");
    }
}
