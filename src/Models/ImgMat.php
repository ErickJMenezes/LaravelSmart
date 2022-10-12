<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgMat extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_mat';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_mat_mat_cod', 'img_mat_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_mat_img_cod'],
            ['img_cod'],
        );
    }

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['img_mat_mat_cod'],
            ['mat_cod'],
        );
    }
}
