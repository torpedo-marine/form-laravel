<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'gender', 'inquiry_type', 'message'
    ];

    // スコープを使用して検索機能を実装
    public function scopeSearch($query, $data)
    {
        if (!empty($data['name'])) {
            $query->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (!empty($data['email'])) {
            $query->where('email', 'like', '%' . $data['email'] . '%');
        }
        if (!empty($data['gender']) && $data['gender'] != '全て') {
            $query->where('gender', $data['gender']);
        }
        if (!empty($data['inquiry_type'])) {
            $query->where('inquiry_type', 'like', '%' . $data['inquiry_type'] . '%');
        }
        if (!empty($data['date'])) {
            $query->whereDate('created_at', $data['date']);
        }
    }
}
