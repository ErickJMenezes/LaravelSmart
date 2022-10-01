<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rmc extends OracleEloquent
{
    use Compoships;

    protected $table = 'rmc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rmc_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rmc_smk_cod_1', 'rmc_smk_cod_1', 'rmc_smk_tipo_1', 'rmc_smk_tipo_1', 'rmc_smk_cod_2', 'rmc_smk_cod_2', 'rmc_smk_tipo_2', 'rmc_smk_tipo_2'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
