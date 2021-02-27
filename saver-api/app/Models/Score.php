<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Score extends Model
{
    use HasFactory;
    // 多対多　belongsToMany(関係するモデル, 中間テーブル)
    public function scores(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User', 'scores')->withTimestamps();
    }
    // いじる？
    public function isScoredBy(?User $user): bool
    {
        return $user
            ? (bool)$this->scores->where('id', $user->id)->count()
            : false;
    }
}
