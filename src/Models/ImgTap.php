<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgTap extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_tap';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_tap_tap_cod', 'img_tap_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_tap_img_cod'],
            ['img_cod'],
        );
    }

    public function tap(): BelongsTo
    {
        return $this->belongsTo(
            Tap::class,
            ['img_tap_tap_cod'],
            ['tap_cod'],
        );
    }
}
