<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Bat extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['bat_smk_tipo', 'bat_idade_min', 'bat_lta_cod', 'bat_gfc_num', 'bat_smk_cod', 'bat_pac_reg'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function frm(): BelongsTo
    {
        return $this->belongsTo(
            Frm::class,
            ['bat_frm_id'],
            ['frm_id'],
        );
    }

    public function gfc(): BelongsTo
    {
        return $this->belongsTo(
            Gfc::class,
            ['bat_gfc_num', 'bat_gfc_num', 'bat_lta_cod', 'bat_lta_cod'],
            ['gfc_num', 'gfc_lta_cod', 'gfc_num', 'gfc_lta_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['bat_pac_reg'],
            ['pac_reg'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['bat_smk_cod', 'bat_smk_cod', 'bat_smk_tipo', 'bat_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
