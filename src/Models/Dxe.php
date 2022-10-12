<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dxe extends OracleEloquent
{
    use Compoships;

    protected $table = 'dxe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dxe_dch_cod', 'dxe_edl_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dch(): BelongsTo
    {
        return $this->belongsTo(
            Dch::class,
            ['dxe_dch_cod'],
            ['dch_cod'],
        );
    }

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['dxe_edl_cod'],
            ['edl_cod'],
        );
    }
}
