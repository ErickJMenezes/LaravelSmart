<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Pea extends OracleEloquent
{
    use Compoships;

    protected $table = 'pea';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pea_aha_tipo', 'pea_pse_seq', 'pea_ape_seq', 'pea_pac_reg', 'pea_seq', 'pea_hsp_num', 'pea_aha_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function pse(): BelongsTo
    {
        return $this->belongsTo(
            Pse::class,
            ['pea_pse_seq', 'pea_pse_seq', 'pea_pse_seq', 'pea_hsp_num', 'pea_hsp_num', 'pea_hsp_num', 'pea_pac_reg', 'pea_pac_reg', 'pea_pac_reg'],
            ['pse_seq', 'pse_hsp_num', 'pse_pac_reg', 'pse_seq', 'pse_hsp_num', 'pse_pac_reg', 'pse_seq', 'pse_hsp_num', 'pse_pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['pea_reg_usr_login', 'pea_aplic_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
