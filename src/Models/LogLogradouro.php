<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class LogLogradouro extends OracleEloquent
{
    use Compoships;

    protected $table = 'log_logradouro';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['log_nu'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function logBairro(): BelongsTo
    {
        return $this->belongsTo(
            LogBairro::class,
            ['bai_nu_ini'],
            ['bai_nu'],
        );
    }
}
