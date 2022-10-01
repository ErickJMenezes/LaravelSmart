<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Gni extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['gni_serie', 'gni_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['gni_emp_cod'],
            ['emp_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['gni_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['gni_usr_login_reg', 'gni_usr_login_canc'],
            ['usr_login', 'usr_login'],
        );
    }
}
