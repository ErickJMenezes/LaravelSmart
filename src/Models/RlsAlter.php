<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RlsAlter extends OracleEloquent
{
    use Compoships;

    protected $table = 'rls_alter';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rls_a_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function rls(): BelongsTo
    {
        return $this->belongsTo(
            Rls::class,
            ['rls_a_rls_cod'],
            ['rls_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rls_a_usr_login'],
            ['usr_login'],
        );
    }
}
