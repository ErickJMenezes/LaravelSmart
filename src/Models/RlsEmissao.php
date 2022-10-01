<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class RlsEmissao extends OracleEloquent
{
    use Compoships;

    protected $table = 'rls_emissao';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['rls_e_usr_login', 'rls_e_dthr_ini'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rls_e_usr_login'],
            ['usr_login'],
        );
    }
}
