<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DwExtCuboColunaDom extends OracleEloquent
{
    use Compoships;

    protected $table = 'dw_ext_cubo_coluna_dom';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dw_ext_cc_tabela', 'dw_ext_cc_cod', 'dw_ext_cc_valor', 'dw_ext_cc_coluna'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dwCuboColuna(): BelongsTo
    {
        return $this->belongsTo(
            DwCuboColuna::class,
            ['dw_ext_cc_coluna', 'dw_ext_cc_coluna', 'dw_ext_cc_coluna', 'dw_ext_cc_tabela', 'dw_ext_cc_tabela', 'dw_ext_cc_tabela', 'dw_ext_cc_cod', 'dw_ext_cc_cod', 'dw_ext_cc_cod'],
            ['dw_cc_coluna', 'dw_cc_tabela', 'dw_cc_cod', 'dw_cc_coluna', 'dw_cc_tabela', 'dw_cc_cod', 'dw_cc_coluna', 'dw_cc_tabela', 'dw_cc_cod'],
        );
    }

    public function dwCubo(): BelongsTo
    {
        return $this->belongsTo(
            DwCubo::class,
            ['dw_ext_cc_cod'],
            ['dw_cubo_cod'],
        );
    }
}
