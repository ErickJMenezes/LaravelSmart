<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iil extends OracleEloquent
{
    use Compoships;

    protected $table = 'iil';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['iil_inv_num', 'iil_lot_num', 'iil_mat_cod', 'iil_inv_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function iin(): BelongsTo
    {
        return $this->belongsTo(
            Iin::class,
            ['iil_mat_cod', 'iil_mat_cod', 'iil_mat_cod', 'iil_inv_num', 'iil_inv_num', 'iil_inv_num', 'iil_inv_serie', 'iil_inv_serie', 'iil_inv_serie'],
            ['iin_mat_cod', 'iin_inv_num', 'iin_inv_serie', 'iin_mat_cod', 'iin_inv_num', 'iin_inv_serie', 'iin_mat_cod', 'iin_inv_num', 'iin_inv_serie'],
        );
    }
}
