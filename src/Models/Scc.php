<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Scc extends OracleEloquent
{
    use Compoships;

    protected $table = 'scc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['scc_cct_cod', 'scc_cct_cct_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['scc_cct_cod', 'scc_cct_cct_cod'],
            ['cct_cod', 'cct_cod'],
        );
    }

    public function nts(): BelongsTo
    {
        return $this->belongsTo(
            Nts::class,
            ['scc_nts_num'],
            ['nts_num'],
        );
    }
}
