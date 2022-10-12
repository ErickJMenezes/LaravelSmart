<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgSma extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_sma';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_sma_sma_num', 'img_sma_img_cod', 'img_sma_sma_serie'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sma(): BelongsTo
    {
        return $this->belongsTo(
            Sma::class,
            ['img_sma_sma_num', 'img_sma_sma_num', 'img_sma_sma_serie', 'img_sma_sma_serie'],
            ['sma_num', 'sma_serie', 'sma_num', 'sma_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_sma_img_cod'],
            ['img_cod'],
        );
    }
}
