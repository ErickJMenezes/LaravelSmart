<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwEme extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_eme';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_eme_mmyy', 'dw_eme_str_cod', 'dw_eme_cnv_cod', 'dw_eme_cid_cod', 'dw_eme_duracao_h', 'dw_eme_sexo', 'dw_eme_faixa_etaria'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['dw_eme_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['dw_eme_str_cod'],
            ['str_cod'],
        );
    }
}
