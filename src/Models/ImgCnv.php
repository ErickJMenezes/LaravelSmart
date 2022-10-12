<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgCnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_cnv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_cnv_cnv_cod', 'img_cnv_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['img_cnv_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_cnv_img_cod'],
            ['img_cod'],
        );
    }
}
