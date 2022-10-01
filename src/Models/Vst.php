<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Vst extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['vst_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['vst_hsp_num', 'vst_hsp_num', 'vst_pac_reg', 'vst_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function img(): BelongsTo
    {
        return $this->belongsTo(
            Img::class,
            ['vst_img_cod'],
            ['img_cod'],
        );
    }
}
