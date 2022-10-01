<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EpeVal extends OracleEloquent
{
    use Compoships;

    protected $table = 'epe_val';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['epe_v_epe_cod', 'epe_v_ext_id', 'epe_v_compet', 'epe_v_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function epeExt(): BelongsTo
    {
        return $this->belongsTo(
            EpeExt::class,
            ['epe_v_ext_id', 'epe_v_ext_id', 'epe_v_epe_cod', 'epe_v_epe_cod'],
            ['epe_e_id', 'epe_e_epe_cod', 'epe_e_id', 'epe_e_epe_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['epe_v_str_cod'],
            ['str_cod'],
        );
    }
}
