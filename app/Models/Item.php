<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'encrypted_data'];

    public function setEncryptedDataAttribute($value)
    {
        $this->attributes['encrypted_data'] = Crypt::encryptString($value);
    }

    public function getEncryptedDataAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
