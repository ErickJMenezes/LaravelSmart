<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Epl extends OracleEloquent
{
    use Compoships;

    protected $table = 'epl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['epl_serie', 'epl_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['epl_psv_cod_previsto', 'epl_psv_cod_real'],
            ['psv_cod', 'psv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['epl_str_solic'],
            ['str_cod'],
        );
    }

    public function tpl(): BelongsTo
    {
        return $this->belongsTo(
            Tpl::class,
            ['epl_tpl_cod'],
            ['tpl_cod'],
        );
    }
}
