<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class WstCredenciais extends OracleEloquent
{
    use Compoships;

    protected $table = 'wst_credenciais';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['wst_c_str', 'wst_c_wst_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function wst(): BelongsTo
    {
        return $this->belongsTo(
            Wst::class,
            ['wst_c_wst_cod'],
            ['wst_cod'],
        );
    }
}
