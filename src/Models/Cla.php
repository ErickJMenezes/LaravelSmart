<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cla extends OracleEloquent
{
    use Compoships;

    protected $table = 'cla';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cla_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cla_smk_cod_1', 'cla_smk_cod_1', 'cla_smk_tipo_1', 'cla_smk_tipo_1', 'cla_smk_cod_2', 'cla_smk_cod_2', 'cla_smk_tipo_2', 'cla_smk_tipo_2'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
