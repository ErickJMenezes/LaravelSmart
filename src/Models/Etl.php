<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Etl extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['etl_lot_num', 'etl_mat_cod', 'etl_sba_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function etq(): BelongsTo
    {
        return $this->belongsTo(
            Etq::class,
            ['etl_sba_cod', 'etl_sba_cod', 'etl_mat_cod', 'etl_mat_cod'],
            ['etq_sba_cod', 'etq_mat_cod', 'etq_sba_cod', 'etq_mat_cod'],
        );
    }
}
