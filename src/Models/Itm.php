<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Itm extends OracleEloquent
{
    use Compoships;

    protected $table = 'itm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['itm_tme_cod', 'itm_cod'];

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

    public function umo(): BelongsTo
    {
        return $this->belongsTo(
            Umo::class,
            ['itm_umo_sigla'],
            ['umo_sigla'],
        );
    }
}
