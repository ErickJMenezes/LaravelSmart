<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Inv extends OracleEloquent
{
    use Compoships;

    protected $table = 'inv';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['inv_serie', 'inv_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['inv_sba_cod'],
            ['sba_cod'],
        );
    }
}
