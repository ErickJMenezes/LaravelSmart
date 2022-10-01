<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cfo extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cfo_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cfos(): HasMany
    {
        return $this->hasMany(
            Cfo::class,
            ['cfo_cod'],
            ['cfo_cfo_cod'],
        );
    }

    public function hcf(): BelongsTo
    {
        return $this->belongsTo(
            Hcf::class,
            ['cfo_hcf_cod_1', 'cfo_hcf_cod_2', 'cfo_hcf_cod_3', 'cfo_hcf_cod_4', 'cfo_hcf_cod_5', 'cfo_hcf_cod_6'],
            ['hcf_cod', 'hcf_cod', 'hcf_cod', 'hcf_cod', 'hcf_cod', 'hcf_cod'],
        );
    }

    public function hdr(): BelongsTo
    {
        return $this->belongsTo(
            Hdr::class,
            ['cfo_hdr_cod_1', 'cfo_hdr_cod_2', 'cfo_hdr_cod_3', 'cfo_hdr_cod_4', 'cfo_hdr_cod_5', 'cfo_hdr_cod_6'],
            ['hdr_cod', 'hdr_cod', 'hdr_cod', 'hdr_cod', 'hdr_cod', 'hdr_cod'],
        );
    }

    public function cct(): BelongsTo
    {
        return $this->belongsTo(
            Cct::class,
            ['cfo_cct_cod'],
            ['cct_cod'],
        );
    }

    public function reinfTpServ(): BelongsTo
    {
        return $this->belongsTo(
            ReinfTpServ::class,
            ['cfo_reinf_tp_serv_cod'],
            ['reinf_tp_serv_cod'],
        );
    }
}
