<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pit extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['pit_pac_reg', 'pit_hsp_num', 'pit_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function adp(): BelongsTo
    {
        return $this->belongsTo(
            Adp::class,
            ['pit_adp_cod', 'pit_adp_cod', 'pit_adp_tipo', 'pit_adp_tipo'],
            ['adp_cod', 'adp_tipo', 'adp_cod', 'adp_tipo'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['pit_hsp_num', 'pit_hsp_num', 'pit_pac_reg', 'pit_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function sit(): BelongsTo
    {
        return $this->belongsTo(
            Sit::class,
            ['pit_sit_cod'],
            ['sit_cod'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['pit_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pit_usr_login'],
            ['usr_login'],
        );
    }
}
