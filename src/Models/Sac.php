<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Sac extends OracleEloquent
{
    use Compoships;

    protected $table = 'sac';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sac_serie', 'sac_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mcs(): BelongsTo
    {
        return $this->belongsTo(
            Mcs::class,
            ['sac_mcs_cod'],
            ['mcs_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sac_usr_login_reg'],
            ['usr_login'],
        );
    }
}
