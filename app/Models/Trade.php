<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'currency', 'enabled', 'branch_id', 'company_id'
    ];

    public function projects()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item', 'trade_id');
    }
}
