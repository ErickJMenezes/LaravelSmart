<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pis extends OracleEloquent
{
    use Compoships;

    protected $table = 'pis';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pis_pac_reg', 'pis_dthr_ini'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['pis_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pis_usr_login_reg', 'pis_usr_login_alter'],
            ['usr_login', 'usr_login'],
        );
    }
}
