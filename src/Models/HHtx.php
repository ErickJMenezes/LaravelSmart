<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HHtx extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['h_htx_pac_reg', 'h_htx_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_htx_pac_reg', 'h_htx_pac_reg_doador'],
            ['pac_reg', 'pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_htx_alter_usr_login', 'h_htx_reg_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
