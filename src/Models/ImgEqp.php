<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgEqp extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_eqp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_eqp_img_cod', 'img_eqp_eqp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function eqp(): BelongsTo
    {
        return $this->belongsTo(
            Eqp::class,
            ['img_eqp_eqp_num'],
            ['eqp_num'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_eqp_img_cod'],
            ['img_cod'],
        );
    }
}
