<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerformerAssignPhotoControl extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'performer_assign_photo_controls';

    protected $connection = 'mysql';

    protected $fillable = [
        'performer_id',
        'model_type',
        'model_id',
        'type_photo_control_id',
        'performer_p_c_status_id',
        'start_date',
        'end_date',
        'created_by',
        'description',
    ];

    const MORPH_TO = [
        'transport' => PerformerTransport::class,
        'performer' => Performer::class,
    ];

    public function performer()
    {
        return $this->belongsTo(Performer::class, 'performer_id', 'id');
    }

    public function performer_photo_control_status()
    {
        return $this->belongsTo(PerformerPhotoControlStatus::class);
    }

    public function type_photo_control()
    {
        return $this->belongsTo(TypePhotoControl::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function model()
    {
        return $this->morphTo();
    }

    public function scopeAssign($query)
    {
        return $query->where('performer_photo_control_status_id', PerformerPhotoControlStatus::STATUS_ASSIGN);
    }

    public function scopeAccept($query)
    {
        return $query->where('performer_photo_control_status_id', PerformerPhotoControlStatus::STATUS_ACCEPT);
    }

    public function scopeNot_accept($query)
    {
        return $query->where('performer_photo_control_status_id', PerformerPhotoControlStatus::STATUS_NOT_ACCEPT);
    }

    public function scopeNot_check($query)
    {
        return $query->where('performer_photo_control_status_id', PerformerPhotoControlStatus::STATUS_NOT_CHECK);
    }
}
