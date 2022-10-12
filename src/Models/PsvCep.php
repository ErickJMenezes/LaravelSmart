<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PsvCep extends OracleEloquent
{
    use Compoships;

    protected $table = 'psv_cep';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psv_c_psv_cod', 'psv_c_cep'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function psv(): BelongsTo
    {
        return $this->belongsTo(
            Psv::class,
            ['psv_c_psv_cod'],
            ['psv_cod'],
        );
    }
}
