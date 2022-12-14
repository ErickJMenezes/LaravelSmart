<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Blm extends OracleEloquent
{
    use Compoships;

    protected $table = 'blm';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['blm_mat_cod', 'blm_lot_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['blm_mat_cod'],
            ['mat_cod'],
        );
    }
}
