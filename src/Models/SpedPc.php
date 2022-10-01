<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SpedPc extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['sped_pc_mes_ref', 'sped_pc_gcc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['sped_pc_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['sped_pc_usr_login_reg', 'sped_pc_usr_login_exp'],
            ['usr_login', 'usr_login'],
        );
    }
}
