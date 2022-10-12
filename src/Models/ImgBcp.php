<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ImgBcp extends OracleEloquent
{
    use Compoships;

    protected $table = 'img_bcp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['img_bcp_bcp_num', 'img_bcp_bcp_serie', 'img_bcp_img_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function bcp(): BelongsTo
    {
        return $this->belongsTo(
            Bcp::class,
            ['img_bcp_bcp_num', 'img_bcp_bcp_num', 'img_bcp_bcp_serie', 'img_bcp_bcp_serie'],
            ['bcp_num', 'bcp_serie', 'bcp_num', 'bcp_serie'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['img_bcp_img_cod'],
            ['img_cod'],
        );
    }
}
