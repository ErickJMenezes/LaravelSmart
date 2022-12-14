<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgGih extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_gih';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_gih_gih_id', 'img_gih_img_cod'];

    protected $connection = 'smart';

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
