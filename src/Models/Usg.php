<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Usg extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['usg_usr_login', 'usg_grp_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function grp(): BelongsTo
    {
        return $this->belongsTo(
            Grp::class,
            ['usg_grp_cod'],
            ['grp_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['usg_usr_login', 'usg_usr_login_reg'],
            ['usr_login', 'usr_login'],
        );
    }
}
