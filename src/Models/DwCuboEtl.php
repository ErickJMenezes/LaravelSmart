<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwCuboEtl extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_cubo_etl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ce_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function dwCubo(): BelongsTo
    {
        return $this->belongsTo(
            DwCubo::class,
            ['dw_ce_cod'],
            ['dw_cubo_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['dw_ce_usr_login'],
            ['usr_login'],
        );
    }
}
