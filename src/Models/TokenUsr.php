<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class TokenUsr extends OracleEloquent
{
    use Compoships;

    protected $table = 'token_usr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['token_u_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function grSes(): BelongsTo
    {
        return $this->belongsTo(
            GrSes::class,
            ['token_u_gr_ses_id'],
            ['gr_ses_id'],
        );
    }
}
