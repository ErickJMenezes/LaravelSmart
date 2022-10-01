<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExcImp extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc_imp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_imp_exc_id', 'exc_imp_ipr_cod', 'exc_imp_tipo_receita'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function exc(): BelongsTo
    {
        return $this->belongsTo(
            Exc::class,
            ['exc_imp_exc_id'],
            ['exc_id'],
        );
    }
}
