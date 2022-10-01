<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RlaQtd extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rla_qtd_num', 'rla_qtd_rla_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['rla_qtd_motivo', 'rla_qtd_motivo', 'rla_qtd_motivo_tipo', 'rla_qtd_motivo_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function rla(): BelongsTo
    {
        return $this->belongsTo(
            Rla::class,
            ['rla_qtd_rla_id'],
            ['rla_id'],
        );
    }
}
