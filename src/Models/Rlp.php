<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rlp extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rlp_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rlp_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rlp_origem_smk_cod', 'rlp_origem_smk_cod', 'rlp_origem_smk_tipo', 'rlp_origem_smk_tipo', 'rlp_pacote_smk_cod', 'rlp_pacote_smk_cod', 'rlp_pacote_smk_tipo', 'rlp_pacote_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rlp_str_solic'],
            ['str_cod'],
        );
    }
}
