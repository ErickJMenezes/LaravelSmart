<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cpr extends OracleEloquent
{
    use Compoships;

    protected $table = 'cpr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cpr_adp_tipo', 'cpr_adp_cod', 'cpr_smk_cod', 'cpr_ctf_tipo'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['cpr_adp_cod', 'cpr_adp_cod', 'cpr_adp_tipo', 'cpr_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cpr_smk_cod', 'cpr_smk_cod', 'cpr_ctf_tipo', 'cpr_ctf_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
