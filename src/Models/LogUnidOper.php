<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LogUnidOper extends OracleEloquent
{
    use Compoships;

    protected $table = 'log_unid_oper';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['uop_nu'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function logBairro(): BelongsTo
    {
        return $this->belongsTo(
            LogBairro::class,
            ['bai_nu'],
            ['bai_nu'],
        );
    }
}
