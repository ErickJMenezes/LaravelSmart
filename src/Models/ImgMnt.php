<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgMnt extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['img_mnt_mnt_num', 'img_mnt_img_cod', 'img_mnt_mnt_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mnt(): BelongsTo
    {
        return $this->belongsTo(
            Mnt::class,
            ['img_mnt_mnt_num', 'img_mnt_mnt_num', 'img_mnt_mnt_serie', 'img_mnt_mnt_serie'],
            ['mnt_num', 'mnt_serie', 'mnt_num', 'mnt_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_mnt_img_cod'],
            ['img_cod'],
        );
    }
}
