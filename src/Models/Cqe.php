<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cqe extends OracleEloquent
{
    use Compoships;

    protected $table = 'cqe';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cqe_osm_num', 'cqe_osm_serie'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cqeMarca(): BelongsTo
    {
        return $this->belongsTo(
            CqeMarca::class,
            ['cqe_marca_cod'],
            ['cqe_m_cod'],
        );
    }

    public function cqeProduto(): BelongsTo
    {
        return $this->belongsTo(
            CqeProduto::class,
            ['cqe_produto_cod'],
            ['cqe_p_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cqe_smk_cod_equip', 'cqe_smk_cod_equip', 'cqe_smk_tipo_equip', 'cqe_smk_tipo_equip'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['cqe_str_solic', 'cqe_str_unid'],
            ['str_cod', 'str_cod'],
        );
    }
}
