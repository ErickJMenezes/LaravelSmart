<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pgp extends OracleEloquent
{
    use Compoships;

    protected $table = 'pgp';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pgp_pro_cod', 'pgp_gfp_num', 'pgp_lta_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function gfp(): BelongsTo
    {
        return $this->belongsTo(
            Gfp::class,
            ['pgp_gfp_num', 'pgp_gfp_num', 'pgp_lta_cod', 'pgp_lta_cod'],
            ['gfp_num', 'gfp_lta_cod', 'gfp_num', 'gfp_lta_cod'],
        );
    }

    public function pro(): BelongsTo
    {
        return $this->belongsTo(
            Pro::class,
            ['pgp_pro_cod'],
            ['pro_cod'],
        );
    }
}
