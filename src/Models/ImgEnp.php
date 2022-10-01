<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgEnp extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_enp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_enp_img_cod', 'img_enp_enp_num', 'img_enp_enp_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function enp(): BelongsTo
    {
        return $this->belongsTo(
            Enp::class,
            ['img_enp_enp_num', 'img_enp_enp_num', 'img_enp_enp_serie', 'img_enp_enp_serie'],
            ['enp_num', 'enp_serie', 'enp_num', 'enp_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_enp_img_cod'],
            ['img_cod'],
        );
    }
}
