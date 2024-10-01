<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'plan_id',
        'start_date',
        'end_date',
        'status',
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function plan():BelongsTo{
        return $this->belongsTo(Plan::class);
    }
    public function invoices():HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
