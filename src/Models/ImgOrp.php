<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgOrp extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_orp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_orp_orp_num', 'img_orp_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function orp(): BelongsTo
    {
        return $this->belongsTo(
            Orp::class,
            ['img_orp_orp_num'],
            ['orp_num'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_orp_img_cod'],
            ['img_cod'],
        );
    }
}
