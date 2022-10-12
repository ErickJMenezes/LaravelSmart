<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgMma extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_mma';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_mma_mma_serie', 'img_mma_mma_num', 'img_mma_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_mma_img_cod'],
            ['img_cod'],
        );
    }

    public function mma(): BelongsTo
    {
        return $this->belongsTo(
            Mma::class,
            ['img_mma_mma_num', 'img_mma_mma_num', 'img_mma_mma_serie', 'img_mma_mma_serie'],
            ['mma_num', 'mma_serie', 'mma_num', 'mma_serie'],
        );
    }
}
