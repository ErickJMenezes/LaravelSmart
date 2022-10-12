<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Exc extends OracleEloquent
{
    use Compoships;

    protected $table = 'exc';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['exc_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function clsTrib(): BelongsTo
    {
        return $this->belongsTo(
            ClsTrib::class,
            ['exc_cls_trib_cod'],
            ['cls_trib_cod'],
        );
    }

    public function cde(): BelongsTo
    {
        return $this->belongsTo(
            Cde::class,
            ['exc_contador_cde_cod'],
            ['cde_cod'],
        );
    }

    public function gcc(): BelongsTo
    {
        return $this->belongsTo(
            Gcc::class,
            ['exc_gcc_cod'],
            ['gcc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['exc_usr_reg_fecha', 'exc_usr_reg', 'exc_usr_diario'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
