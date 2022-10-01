<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class EdlEdl extends OracleEloquent
{
    use Compoships;

    protected $table = 'edl_edl';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['edl_e_edl_cod_destino', 'edl_e_edl_cod_origem'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function edl(): BelongsTo
    {
        return $this->belongsTo(
            Edl::class,
            ['edl_e_edl_cod_origem', 'edl_e_edl_cod_destino'],
            ['edl_cod', 'edl_cod'],
        );
    }
}
