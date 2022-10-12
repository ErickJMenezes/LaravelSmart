<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ItmSmk extends OracleEloquent
{
    use Compoships;

    protected $table = 'itm_smk';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['itm_s_cod', 'itm_tme_cod', 'itm_s_tipo'];

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
