<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sca extends OracleEloquent
{
    use Compoships;

    protected $table = 'sca';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sca_cai_cod', 'sca_str_solic'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cai(): BelongsTo
    {
        return $this->belongsTo(
            Cai::class,
            ['sca_cai_cod'],
            ['cai_cod'],
        );
    }
}
