<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rcr extends OracleEloquent
{
    use Compoships;

    protected $table = 'rcr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rcr_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['rcr_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function tab(): BelongsTo
    {
        return $this->belongsTo(
            Tab::class,
            ['rcr_tab_cod'],
            ['tab_cod'],
        );
    }

    public function gsv(): BelongsTo
    {
        return $this->belongsTo(
            Gsv::class,
            ['rcr_gsv_cod'],
            ['gsv_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['rcr_smk_cod', 'rcr_smk_cod', 'rcr_smk_tipo', 'rcr_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function via(): BelongsTo
    {
        return $this->belongsTo(
            Via::class,
            ['rcr_via_cod'],
            ['via_cod'],
        );
    }
}
