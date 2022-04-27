<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'locations';

    public $orderable = [
        'id',
        'name',
        'phone',
        'city',
        'state',
        'zip',
    ];

    public $filterable = [
        'id',
        'name',
        'phone',
        'city',
        'state',
        'zip',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'phone',
        'city',
        'state',
        'zip',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
