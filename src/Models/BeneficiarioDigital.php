<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BeneficiarioDigital extends OracleEloquent
{
    use Compoships;

    protected $table = 'beneficiario_digital';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ref_identificador', 'dedo', 'tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];
}
