<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgRnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_rnc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_rnc_rnc_num', 'img_rnc_rnc_serie', 'img_rnc_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rnc(): BelongsTo
    {
        return $this->belongsTo(
            Rnc::class,
            ['img_rnc_rnc_num', 'img_rnc_rnc_num', 'img_rnc_rnc_serie', 'img_rnc_rnc_serie'],
            ['rnc_num', 'rnc_serie', 'rnc_num', 'rnc_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_rnc_img_cod'],
            ['img_cod'],
        );
    }
}
