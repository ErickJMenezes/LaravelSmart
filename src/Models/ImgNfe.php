<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgNfe extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_nfe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_nfe_nfe_num', 'img_nfe_nfe_tipo', 'img_nfe_nfe_serie', 'img_nfe_fne_cod', 'img_nfe_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function nfe(): BelongsTo
    {
        return $this->belongsTo(
            Nfe::class,
            ['img_nfe_nfe_num', 'img_nfe_nfe_num', 'img_nfe_nfe_num', 'img_nfe_nfe_num', 'img_nfe_nfe_serie', 'img_nfe_nfe_serie', 'img_nfe_nfe_serie', 'img_nfe_nfe_serie', 'img_nfe_nfe_tipo', 'img_nfe_nfe_tipo', 'img_nfe_nfe_tipo', 'img_nfe_nfe_tipo', 'img_nfe_fne_cod', 'img_nfe_fne_cod', 'img_nfe_fne_cod', 'img_nfe_fne_cod'],
            ['nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num', 'nfe_tipo', 'nfe_fne_cod', 'nfe_serie', 'nfe_num'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_nfe_img_cod'],
            ['img_cod'],
        );
    }
}
