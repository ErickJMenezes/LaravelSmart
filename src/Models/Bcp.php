<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bcp extends OracleEloquent
{
    use Compoships;

    protected $table = 'bcp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['bcp_serie', 'bcp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['bcp_ccr_banco'],
            ['ccr_cod'],
        );
    }
}
