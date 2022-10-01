<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mms extends OracleEloquent
{
    use Compoships;

    protected $table = 'mms';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mms_mat_cod', 'mms_osm_num', 'mms_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['mms_mat_cod'],
            ['mat_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mms_usr_login'],
            ['usr_login'],
        );
    }
}
