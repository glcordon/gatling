<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Body extends Model implements HasMedia
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use InteractsWithMedia;
    use Auditable;

    public const EMBALM_SELECT = [
        'no'  => 'No',
        'yes' => 'Yes',
    ];

    public const HOUSE_REMOVAL_SELECT = [
        'yes' => 'Yes',
        'no'  => 'No',
    ];

    public const PERSONAL_ITEM_PICKED_UP_SELECT = [
        'no'  => 'No',
        'yes' => 'Yes',
    ];

    public const FAMILY_READY_FOR_REMOVAL_SELECT = [
        'yes' => 'Yes',
        'no'  => 'No',
    ];

    public const COVID_SELECT = [
        'no'      => 'No',
        'yes'     => 'Yes',
        'unknown' => 'UnKnown',
    ];

    public const STAIR_LOCATION_SELECT = [
        'Inside'  => 'Inside',
        'outside' => 'Outside',
        'both'    => 'Both',
        'none'    => 'None',
    ];

    public $table = 'bodies';

    public static $search = [
        'first_name',
        'last_name',
        'covid',
        'doctors_name',
        'at_need_service_id_number',
        'next_of_kin_email',
    ];

    public $orderable = [
        'id',
        'first_name',
        'last_name',
        'date_of_birth',
        'death_date',
        'ssn',
        'height',
        'weight',
        'place_of_removal',
        'time_of_death',
        'covid',
        'me_case_number',
        'house_removal',
        'rd_number',
        'stair_location',
        'family_ready_for_removal',
        'doctors_name',
        'doctors_phone_number',
        'doctors_fax',
        'at_need_service_id_number',
        'pre_need_number',
        'next_of_kin',
        'relationship',
        'next_of_kin_address',
        'next_of_kin_phone',
        'next_of_kin_email',
        'called_in_by',
        'called_in_by_relationship',
        'called_in_by_phone',
        'embalm',
        'call_received_by',
        'call_received_by_date_time',
        'removal_made_by',
        'removal_date_time',
        'personal_item_picked_up',
        'list_of_items_received',
        'family_notified',
    ];

    public $filterable = [
        'id',
        'first_name',
        'last_name',
        'date_of_birth',
        'death_date',
        'ssn',
        'height',
        'weight',
        'place_of_removal',
        'time_of_death',
        'covid',
        'me_case_number',
        'house_removal',
        'rd_number',
        'stair_location',
        'family_ready_for_removal',
        'doctors_name',
        'doctors_phone_number',
        'doctors_fax',
        'at_need_service_id_number',
        'pre_need_number',
        'next_of_kin',
        'relationship',
        'next_of_kin_address',
        'next_of_kin_phone',
        'next_of_kin_email',
        'called_in_by',
        'called_in_by_relationship',
        'called_in_by_phone',
        'embalm',
        'call_received_by',
        'call_received_by_date_time',
        'removal_made_by',
        'removal_date_time',
        'personal_item_picked_up',
        'list_of_items_received',
        'family_notified',
    ];

    protected $appends = [
        'photo',
    ];

    protected $dates = [
        'date_of_birth',
        'death_date',
        'call_received_by_date_time',
        'removal_date_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'death_date',
        'ssn',
        'height',
        'weight',
        'place_of_removal',
        'time_of_death',
        'covid',
        'me_case_number',
        'house_removal',
        'rd_number',
        'stair_location',
        'family_ready_for_removal',
        'doctors_name',
        'doctors_phone_number',
        'doctors_fax',
        'at_need_service_id_number',
        'pre_need_number',
        'next_of_kin',
        'relationship',
        'next_of_kin_address',
        'next_of_kin_phone',
        'next_of_kin_email',
        'called_in_by',
        'called_in_by_relationship',
        'called_in_by_phone',
        'embalm',
        'call_received_by',
        'call_received_by_date_time',
        'removal_made_by',
        'removal_date_time',
        'personal_item_picked_up',
        'list_of_items_received',
        'family_notified',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $thumbnailWidth  = 50;
        $thumbnailHeight = 50;

        $thumbnailPreviewWidth  = 120;
        $thumbnailPreviewHeight = 120;

        $this->addMediaConversion('thumbnail')
            ->width($thumbnailWidth)
            ->height($thumbnailHeight)
            ->fit('crop', $thumbnailWidth, $thumbnailHeight);
        $this->addMediaConversion('preview_thumbnail')
            ->width($thumbnailPreviewWidth)
            ->height($thumbnailPreviewHeight)
            ->fit('crop', $thumbnailPreviewWidth, $thumbnailPreviewHeight);
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDeathDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDeathDateAttribute($value)
    {
        $this->attributes['death_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCovidLabelAttribute($value)
    {
        return static::COVID_SELECT[$this->covid] ?? null;
    }

    public function getHouseRemovalLabelAttribute($value)
    {
        return static::HOUSE_REMOVAL_SELECT[$this->house_removal] ?? null;
    }

    public function getStairLocationLabelAttribute($value)
    {
        return static::STAIR_LOCATION_SELECT[$this->stair_location] ?? null;
    }

    public function getFamilyReadyForRemovalLabelAttribute($value)
    {
        return static::FAMILY_READY_FOR_REMOVAL_SELECT[$this->family_ready_for_removal] ?? null;
    }

    public function getEmbalmLabelAttribute($value)
    {
        return static::EMBALM_SELECT[$this->embalm] ?? null;
    }

    public function getCallReceivedByDateTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setCallReceivedByDateTimeAttribute($value)
    {
        $this->attributes['call_received_by_date_time'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getRemovalDateTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setRemovalDateTimeAttribute($value)
    {
        $this->attributes['removal_date_time'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getPersonalItemPickedUpLabelAttribute($value)
    {
        return static::PERSONAL_ITEM_PICKED_UP_SELECT[$this->personal_item_picked_up] ?? null;
    }

    public function getPhotoAttribute()
    {
        return $this->getMedia('body_photo')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
