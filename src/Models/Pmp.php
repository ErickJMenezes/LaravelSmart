<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pmp extends OracleEloquent
{
    use Compoships;

    protected $table = 'pmp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pmp_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['pmp_smk_cod_pai', 'pmp_smk_cod_pai', 'pmp_smk_tipo_pai', 'pmp_smk_tipo_pai', 'pmp_smk_cod_item', 'pmp_smk_cod_item', 'pmp_smk_tipo_item', 'pmp_smk_tipo_item'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
