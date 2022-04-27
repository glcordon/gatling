<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crematorium extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'crematoria';

    public $orderable = [
        'id',
        'crematorium_name',
        'phone',
        'representative',
        'address',
    ];

    public $filterable = [
        'id',
        'crematorium_name',
        'phone',
        'representative',
        'address',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'crematorium_name',
        'phone',
        'representative',
        'address',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
