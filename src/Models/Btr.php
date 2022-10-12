<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Btr extends OracleEloquent
{
    use Compoships;

    protected $table = 'btr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['btr_tro_cod', 'btr_rco_cod', 'btr_idade_min', 'btr_smk_tipo', 'btr_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rco(): BelongsTo
    {
        return $this->belongsTo(
            Rco::class,
            ['btr_rco_cod', 'btr_rco_cod', 'btr_tro_cod', 'btr_tro_cod'],
            ['rco_cod', 'rco_tro_cod', 'rco_cod', 'rco_tro_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['btr_smk_cod', 'btr_smk_cod', 'btr_smk_tipo', 'btr_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
