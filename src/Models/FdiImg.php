<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class FdiImg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['fdi_img_fdl_id', 'fdi_img_psv_cod', 'fdi_img_img_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function fdl(): BelongsTo
    {
        return $this->belongsTo(
            Fdl::class,
            ['fdi_img_fdl_id'],
            ['fdl_id'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['fdi_img_img_cod'],
            ['img_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['fdi_img_psv_cod'],
            ['psv_cod'],
        );
    }
}
