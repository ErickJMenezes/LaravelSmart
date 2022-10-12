<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Wqlf extends OracleEloquent
{
    use Compoships;

    protected $table = 'wqlf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['wqlf_rot', 'wqlf_dsc', 'wqlf_atr'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['wqlf_atr', 'wqlf_atr', 'wqlf_dsc', 'wqlf_dsc'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }
}
