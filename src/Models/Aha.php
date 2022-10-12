<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Aha extends OracleEloquent
{
    use Compoships;

    protected $table = 'aha';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aha_tipo', 'aha_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['aha_adp_cod', 'aha_adp_cod', 'aha_adp_tipo', 'aha_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function dsc(): BelongsTo
    {
        return $this->belongsTo(
            Dsc::class,
            ['aha_dsc_cod'],
            ['dsc_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['aha_smk_cod', 'aha_smk_cod', 'aha_smk_tipo', 'aha_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function tah(): BelongsTo
    {
        return $this->belongsTo(
            Tah::class,
            ['aha_tipo'],
            ['tah_cod'],
        );
    }
}
