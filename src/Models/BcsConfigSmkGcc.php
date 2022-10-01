<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsConfigSmkGcc extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_config_smk_gcc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_config_smk_gcc_gcc_cod', 'bcs_config_smk_gcc_smk_tipo', 'bcs_config_smk_gcc_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['bcs_config_smk_gcc_smk_tipo', 'bcs_config_smk_gcc_smk_tipo', 'bcs_config_smk_gcc_smk_cod', 'bcs_config_smk_gcc_smk_cod'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['bcs_config_smk_gcc_gcc_cod'],
            ['gcc_cod'],
        );
    }
}
