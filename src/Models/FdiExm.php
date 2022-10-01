<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FdiExm extends OracleEloquent
{
    use Compoships;

    protected $table = 'fdi_exm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fdi_exm_cod', 'fdi_fdl_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['fdi_exm_cod'],
            ['exm_cod'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['fdi_tap_cod'],
            ['tap_cod'],
        );
    }

    public function fdl(): BelongsTo
    {
        return $this->belongsTo(
            Fdl::class,
            ['fdi_fdl_id'],
            ['fdl_id'],
        );
    }
}
