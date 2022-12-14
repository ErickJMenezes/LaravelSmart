<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgTpa extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_tpa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_tpa_img_cod', 'img_tpa_tpa_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function tpa(): BelongsTo
    {
        return $this->belongsTo(
            Tpa::class,
            ['img_tpa_tpa_id'],
            ['tpa_id'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_tpa_img_cod'],
            ['img_cod'],
        );
    }
}
