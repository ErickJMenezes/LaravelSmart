<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ptd extends OracleEloquent
{
    use Compoships;

    protected $table = 'ptd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ptd_pti_cod', 'ptd_mes_ref'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function lct(): BelongsTo
    {
        return $this->belongsTo(
            Lct::class,
            ['ptd_lct_seq', 'ptd_lct_seq', 'ptd_lct_lote', 'ptd_lct_lote'],
            ['lct_seq', 'lct_lote', 'lct_seq', 'lct_lote'],
        );
    }

    public function pti(): BelongsTo
    {
        return $this->belongsTo(
            Pti::class,
            ['ptd_pti_cod'],
            ['pti_cod'],
        );
    }
}
