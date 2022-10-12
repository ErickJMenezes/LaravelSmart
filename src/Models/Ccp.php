<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ccp extends OracleEloquent
{
    use Compoships;

    protected $table = 'ccp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ccp_seq'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ccp_smk_cod_proc', 'ccp_smk_cod_proc', 'ccp_smk_tipo_proc', 'ccp_smk_tipo_proc', 'ccp_smk_cod_item', 'ccp_smk_cod_item', 'ccp_smk_tipo_item', 'ccp_smk_tipo_item'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ccp_str_cod'],
            ['str_cod'],
        );
    }
}
