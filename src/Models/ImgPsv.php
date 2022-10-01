<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgPsv extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['img_psv_img_cod', 'img_psv_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_psv_img_cod'],
            ['img_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['img_psv_psv_cod'],
            ['psv_cod'],
        );
    }
}
