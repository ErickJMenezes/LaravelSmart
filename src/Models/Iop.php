<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Iop extends OracleEloquent
{
    use Compoships;

    protected $table = 'iop';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['iop_orp_num', 'iop_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['iop_amo_cod'],
            ['amo_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['iop_pai_smk_cod', 'iop_pai_smk_cod', 'iop_pai_smk_tipo', 'iop_pai_smk_tipo', 'iop_smk_cod', 'iop_smk_cod', 'iop_smk_tipo', 'iop_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['iop_canc_mot_cod', 'iop_canc_mot_cod', 'iop_canc_mot_tipo', 'iop_canc_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function orp(): BelongsTo
    {
        return $this->belongsTo(
            Orp::class,
            ['iop_orp_num'],
            ['orp_num'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['iop_tab_cod'],
            ['tab_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['iop_usr_login'],
            ['usr_login'],
        );
    }
}
