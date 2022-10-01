<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class DtbPacote extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['dtb_pacote_id', 'dtb_pacote_ctf_cod', 'dtb_pacote_smk_cod', 'dtb_pacote_smk_tipo', 'dtb_pacote_ctf_tipo', 'dtb_pacote_limite_min', 'dtb_pacote_cnv_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function dtb(): BelongsTo
    {
        return $this->belongsTo(
            Dtb::class,
            ['dtb_pacote_id', 'dtb_pacote_id', 'dtb_pacote_id', 'dtb_pacote_id', 'dtb_pacote_id', 'dtb_pacote_limite_min', 'dtb_pacote_limite_min', 'dtb_pacote_limite_min', 'dtb_pacote_limite_min', 'dtb_pacote_limite_min', 'dtb_pacote_ctf_cod', 'dtb_pacote_ctf_cod', 'dtb_pacote_ctf_cod', 'dtb_pacote_ctf_cod', 'dtb_pacote_ctf_cod', 'dtb_pacote_ctf_tipo', 'dtb_pacote_ctf_tipo', 'dtb_pacote_ctf_tipo', 'dtb_pacote_ctf_tipo', 'dtb_pacote_ctf_tipo', 'dtb_pacote_cnv_cod', 'dtb_pacote_cnv_cod', 'dtb_pacote_cnv_cod', 'dtb_pacote_cnv_cod', 'dtb_pacote_cnv_cod'],
            ['dtb_id', 'dtb_limite_min', 'dtb_ctf_cod', 'dtb_ctf_tipo', 'dtb_cnv_cod', 'dtb_id', 'dtb_limite_min', 'dtb_ctf_cod', 'dtb_ctf_tipo', 'dtb_cnv_cod', 'dtb_id', 'dtb_limite_min', 'dtb_ctf_cod', 'dtb_ctf_tipo', 'dtb_cnv_cod', 'dtb_id', 'dtb_limite_min', 'dtb_ctf_cod', 'dtb_ctf_tipo', 'dtb_cnv_cod', 'dtb_id', 'dtb_limite_min', 'dtb_ctf_cod', 'dtb_ctf_tipo', 'dtb_cnv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['dtb_pacote_smk_tipo', 'dtb_pacote_smk_tipo', 'dtb_pacote_smk_cod', 'dtb_pacote_smk_cod'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
