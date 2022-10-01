<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cot extends OracleEloquent
{
    use Compoships;

    protected $table = 'cot';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cot_cnv_cod', 'cot_padrao_preco', 'cot_umo_sigla', 'cot_dt_inic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cot_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function umo(): BelongsTo
    {
        return $this->belongsTo(
            Umo::class,
            ['cot_umo_sigla'],
            ['umo_sigla'],
        );
    }
}
