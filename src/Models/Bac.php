<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bac extends OracleEloquent
{
    use Compoships;

    protected $table = 'bac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bac_dsc_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['bac_dsc_cod'],
            ['dsc_cod'],
        );
    }

    public function gbh(): BelongsTo
    {
        return $this->belongsTo(
            Gbh::class,
            ['bac_gbh_cod'],
            ['gbh_cod'],
        );
    }

    public function tba(): BelongsTo
    {
        return $this->belongsTo(
            Tba::class,
            ['bac_tba_cod'],
            ['tba_cod'],
        );
    }
}
