<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'currency', 'enabled', 'branch_id', 'company_id'
    ];

    public function trades()
    {
        return $this->belongsTo('App\Models\Trade', 'trade_id');
    }
}
