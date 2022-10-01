<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sbn extends OracleEloquent
{
    use Compoships;

    protected $table = 'sbn';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sbn_ctf_tipo', 'sbn_bnc_cod', 'sbn_smk_cod', 'sbn_str_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bnc(): BelongsTo
    {
        return $this->belongsTo(
            Bnc::class,
            ['sbn_bnc_cod', 'sbn_bnc_cod', 'sbn_str_cod', 'sbn_str_cod'],
            ['bnc_cod', 'bnc_str_cod', 'bnc_cod', 'bnc_str_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['sbn_smk_cod', 'sbn_smk_cod', 'sbn_ctf_tipo', 'sbn_ctf_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
