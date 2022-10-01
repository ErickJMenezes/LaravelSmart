<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class PcRedeUsr extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pc_rede_usr_login', 'pc_rede_usr_host'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pcRede(): BelongsTo
    {
        return $this->belongsTo(
            PcRede::class,
            ['pc_rede_usr_host'],
            ['pc_rede_host'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pc_rede_usr_login'],
            ['usr_login'],
        );
    }
}
