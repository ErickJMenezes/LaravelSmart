<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cms extends OracleEloquent
{
    use Compoships;

    protected $table = 'cms';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cms_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function mat(): BelongsTo
    {
        return $this->belongsTo(
            Mat::class,
            ['cms_mat_cod'],
            ['mat_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['cms_smk_cod', 'cms_smk_cod', 'cms_smk_tipo', 'cms_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
