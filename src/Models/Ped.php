<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ped extends OracleEloquent
{
    use Compoships;

    protected $table = 'ped';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ped_edl_cod_origem_pend', 'ped_edl_cod_destino'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['ped_edl_cod_destino', 'ped_edl_cod_origem_pend'],
            ['edl_cod', 'edl_cod'],
        );
    }
}
