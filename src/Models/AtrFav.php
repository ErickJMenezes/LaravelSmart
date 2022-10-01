<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class AtrFav extends OracleEloquent
{
    use Compoships;

    protected $table = 'atr_fav';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['atr_f_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['atr_f_atr_num', 'atr_f_atr_num', 'atr_f_dsc_cod', 'atr_f_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['atr_f_smk_cod', 'atr_f_smk_cod', 'atr_f_smk_tipo', 'atr_f_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
