<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exf extends OracleEloquent
{
    use Compoships;

    protected $table = 'exf';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exf_exm_cod', 'exf_psv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exf_exm_cod'],
            ['exm_cod'],
        );
    }

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['exf_psv_cod'],
            ['psv_cod'],
        );
    }
}
