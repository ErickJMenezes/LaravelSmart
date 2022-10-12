<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Odt extends OracleEloquent
{
    use Compoships;

    protected $table = 'odt';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['odt_num', 'odt_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function atr(): BelongsTo
    {
        return $this->belongsTo(
            Atr::class,
            ['odt_atr_num', 'odt_atr_num', 'odt_dsc_cod', 'odt_dsc_cod'],
            ['atr_num', 'atr_dsc', 'atr_num', 'atr_dsc'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['odt_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['odt_usr_login'],
            ['usr_login'],
        );
    }
}
