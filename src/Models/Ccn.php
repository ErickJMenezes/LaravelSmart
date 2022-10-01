<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ccn extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ccn_cnv_cod', 'ccn_smk_tipo', 'ccn_smk_cod', 'ccn_str_solic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['ccn_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ccn_smk_cod_cobra', 'ccn_smk_cod_cobra', 'ccn_smk_tipo_cobra', 'ccn_smk_tipo_cobra', 'ccn_smk_cod', 'ccn_smk_cod', 'ccn_smk_tipo', 'ccn_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['ccn_str_solic'],
            ['str_cod'],
        );
    }
}
