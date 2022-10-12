<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class ExmVar extends OracleEloquent
{
    use Compoships;

    protected $table = 'exm_var';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exm_v_exm_cod', 'exm_v_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function exm(): BelongsTo
    {
        return $this->belongsTo(
            Exm::class,
            ['exm_v_exm_cod'],
            ['exm_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['exm_v_smk_cod', 'exm_v_smk_cod', 'exm_v_smk_tipo', 'exm_v_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
