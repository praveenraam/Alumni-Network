<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForgotPasswordRequest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'roll_number', 'is_resolved'];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'roll_number', 'roll_no');
    }
}
