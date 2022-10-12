<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgMed extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_med';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_med_img_cod', 'img_med_psv_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_med_img_cod'],
            ['img_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['img_med_psv_cod'],
            ['psv_cod'],
        );
    }
}
