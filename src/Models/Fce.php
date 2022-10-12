<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Fce extends OracleEloquent
{
    use Compoships;

    protected $table = 'fce';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['fce_sba_cod', 'fce_dthr'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sba(): BelongsTo
    {
        return $this->belongsTo(
            Sba::class,
            ['fce_sba_cod'],
            ['sba_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['fce_usr_login_reg', 'fce_usr_login_canc'],
            ['usr_login', 'usr_login'],
        );
    }
}
