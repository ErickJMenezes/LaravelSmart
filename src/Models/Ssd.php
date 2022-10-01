<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ssd extends OracleEloquent
{
    use Compoships;

    protected $table = 'ssd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ssd_cod_sauded'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ssd_smk_cod', 'ssd_smk_cod', 'ssd_smk_tipo', 'ssd_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
