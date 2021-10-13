<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'tole',
        'municipality',
        'wardno',
        'price',
        'tbphoto',
        'hallphoto',
        'kitchenphoto',
        'psphoto',
        'froom',
        'sroom',
        // 'avaibilitytime',
        'info',
        'rules',
        'isNegotiable',
        'isAvailable',
        'user_id',
        'age_range',
        'tenant_type',
        'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
