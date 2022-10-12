<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Krg extends OracleEloquent
{
    use Compoships;

    protected $table = 'krg';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['krg_smk_tipo', 'krg_mat_cod', 'krg_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['krg_mat_cod'],
            ['mat_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['krg_smk_cod', 'krg_smk_cod', 'krg_smk_tipo', 'krg_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
