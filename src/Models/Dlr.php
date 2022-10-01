<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dlr extends OracleEloquent
{
    use Compoships;

    protected $table = 'dlr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dlr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dlr_usr_login'],
            ['usr_login'],
        );
    }

    public function ros(): BelongsTo
    {
        return $this->belongsTo(
            Ros::class,
            ['dlr_ros_id'],
            ['ros_id'],
        );
    }
}
