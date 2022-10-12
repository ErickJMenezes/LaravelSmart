<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ItmCnv extends OracleEloquent
{
    use Compoships;

    protected $table = 'itm_cnv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['itm_tme_cod', 'itm_c_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function tme(): BelongsTo
    {
        return $this->belongsTo(
            Tme::class,
            ['itm_tme_cod'],
            ['tme_cod'],
        );
    }
}
