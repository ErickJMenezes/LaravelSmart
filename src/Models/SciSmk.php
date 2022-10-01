<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SciSmk extends OracleEloquent
{
    use Compoships;

    protected $table = 'sci_smk';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sci_smk_sci_cod', 'sci_smk_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function sci(): BelongsTo
    {
        return $this->belongsTo(
            Sci::class,
            ['sci_smk_sci_cod'],
            ['sci_cod'],
        );
    }

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['sci_smk_smk_cod', 'sci_smk_smk_cod', 'sci_smk_smk_tipo', 'sci_smk_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }
}
