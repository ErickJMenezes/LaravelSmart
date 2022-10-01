<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LacsNlanc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['lacs_nl_num', 'lacs_nl_exc_id', 'lacs_nl_lacs_cod', 'lacs_nl_mes'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function excLacs(): BelongsTo
    {
        return $this->belongsTo(
            ExcLacs::class,
            ['lacs_nl_mes', 'lacs_nl_mes', 'lacs_nl_mes', 'lacs_nl_lacs_cod', 'lacs_nl_lacs_cod', 'lacs_nl_lacs_cod', 'lacs_nl_exc_id', 'lacs_nl_exc_id', 'lacs_nl_exc_id'],
            ['exc_lcs_mes', 'exc_lcs_lacs_cod', 'exc_lcs_exc_id', 'exc_lcs_mes', 'exc_lcs_lacs_cod', 'exc_lcs_exc_id', 'exc_lcs_mes', 'exc_lcs_lacs_cod', 'exc_lcs_exc_id'],
        );
    }
}
