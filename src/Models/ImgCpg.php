<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgCpg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['img_cpg_cpg_num', 'img_cpg_img_cod', 'img_cpg_cpg_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['img_cpg_cpg_num', 'img_cpg_cpg_num', 'img_cpg_cpg_serie', 'img_cpg_cpg_serie'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_cpg_img_cod'],
            ['img_cod'],
        );
    }
}
