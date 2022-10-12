<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RlaQtd extends OracleEloquent
{
    use Compoships;

    protected $table = 'rla_qtd';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rla_qtd_num', 'rla_qtd_rla_id'];

    protected $connection = 'smart';

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
