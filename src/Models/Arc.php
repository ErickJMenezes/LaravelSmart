<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Arc extends OracleEloquent
{
    use Compoships;

    protected $table = 'arc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['arc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['arc_smk_cod_destino', 'arc_smk_cod_destino', 'arc_smk_tipo_destino', 'arc_smk_tipo_destino', 'arc_smk_cod_origem', 'arc_smk_cod_origem', 'arc_smk_tipo_origem', 'arc_smk_tipo_origem'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
