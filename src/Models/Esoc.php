<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Esoc extends OracleEloquent
{
    use Compoships;

    protected $table = 'esoc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['esoc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['esoc_emp_cod'],
            ['emp_cod'],
        );
    }

    public function nwa(): BelongsTo
    {
        return $this->belongsTo(
            Nwa::class,
            ['esoc_nwa_id_retorno', 'esoc_nwa_id_envio'],
            ['nwa_id', 'nwa_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['esoc_usr_login'],
            ['usr_login'],
        );
    }
}
