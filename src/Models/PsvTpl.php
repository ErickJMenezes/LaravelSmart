<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvTpl extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_tpl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_t_psv_cod', 'psv_t_dia', 'psv_t_tpl_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_t_psv_cod'],
            ['psv_cod'],
        );
    }

    public function tpl(): BelongsTo
    {
        return $this->belongsTo(
            Tpl::class,
            ['psv_t_tpl_cod'],
            ['tpl_cod'],
        );
    }
}
