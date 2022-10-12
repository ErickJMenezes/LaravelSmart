<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Caq extends OracleEloquent
{
    use Compoships;

    protected $table = 'caq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['caq_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['caq_adp_cod', 'caq_adp_cod', 'caq_adp_tipo', 'caq_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['caq_pac_reg'],
            ['pac_reg'],
        );
    }
}
