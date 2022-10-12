<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DomCfg extends OracleEloquent
{
    use Compoships;

    protected $table = 'dom_cfg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dom_cfg_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ctgDom(): BelongsTo
    {
        return $this->belongsTo(
            CtgDom::class,
            ['dom_cfg_ctg_dom_cod'],
            ['ctg_dom_cod'],
        );
    }
}
