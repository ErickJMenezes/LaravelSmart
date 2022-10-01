<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CnvCodJustificativas extends OracleEloquent
{
    use Compoships;

    protected $table = 'cnv_cod_justificativas';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cnv_cod_justi_cnv_cod', 'cnv_codigo_justificativa'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cnv_cod_justi_cnv_cod'],
            ['cnv_cod'],
        );
    }
}
