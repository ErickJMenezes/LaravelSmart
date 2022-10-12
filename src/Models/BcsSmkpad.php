<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class BcsSmkpad extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcs_smkpad';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcs_smkpad_smk_tipo', 'bcs_smkpad_smk_cod', 'bcs_smkpad_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['bcs_smkpad_smk_tipo', 'bcs_smkpad_smk_tipo', 'bcs_smkpad_smk_cod', 'bcs_smkpad_smk_cod'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
