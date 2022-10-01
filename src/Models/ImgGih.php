<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgGih extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['img_gih_gih_id', 'img_gih_img_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_gih_img_cod'],
            ['img_cod'],
        );
    }
}
