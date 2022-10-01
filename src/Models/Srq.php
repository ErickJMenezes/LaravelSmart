<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Srq extends OracleEloquent
{
    use Compoships;

    protected $table = 'srq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['srq_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['srq_smk_cod', 'srq_smk_cod', 'srq_smk_tipo', 'srq_smk_tipo', 'srq_smk_cod_anterior', 'srq_smk_cod_anterior', 'srq_smk_tipo_anterior', 'srq_smk_tipo_anterior'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
