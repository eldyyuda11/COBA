<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'id_story';
    protected $fillable = [
        'user_id',
        'image_path',
        'judul',
        'isi',
        'tanggal_publish'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
