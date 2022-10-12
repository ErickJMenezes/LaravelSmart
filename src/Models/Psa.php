<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Psa extends OracleEloquent
{
    use Compoships;

    protected $table = 'psa';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['psa_sap_cod', 'psa_smk_cod', 'psa_smk_tipo'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sap(): BelongsTo
    {
        return $this->belongsTo(
            Sap::class,
            ['psa_sap_cod'],
            ['sap_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['psa_smk_cod', 'psa_smk_cod', 'psa_smk_tipo', 'psa_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
