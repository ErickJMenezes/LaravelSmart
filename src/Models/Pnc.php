<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pnc extends OracleEloquent
{
    use Compoships;

    protected $table = 'pnc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pnc_num', 'pnc_rnc_serie', 'pnc_rnc_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rnc(): BelongsTo
    {
        return $this->belongsTo(
            Rnc::class,
            ['pnc_rnc_num', 'pnc_rnc_num', 'pnc_rnc_serie', 'pnc_rnc_serie'],
            ['rnc_num', 'rnc_serie', 'rnc_num', 'rnc_serie'],
        );
    }
}
