<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgSmk extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['img_smk_smk_tipo', 'img_smk_smk_cod', 'img_smk_img_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_smk_img_cod'],
            ['img_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['img_smk_smk_cod', 'img_smk_smk_cod', 'img_smk_smk_tipo', 'img_smk_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
