<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Tms extends OracleEloquent
{
    use Compoships;

    protected $table = 'tms';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['tms_tmm_cod', 'tms_sba_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['tms_sba_cod'],
            ['sba_cod'],
        );
    }

    public function tmm(): BelongsTo
    {
        return $this->belongsTo(
            Tmm::class,
            ['tms_tmm_cod'],
            ['tmm_cod'],
        );
    }
}
