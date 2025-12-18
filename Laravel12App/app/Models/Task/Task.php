<?php

namespace App\Models\Task;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'task_tables';
    protected $fillable = [
      'name',
      'completed',
      'user_id',
      'created_by'
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class,'user_id');
    }


}
