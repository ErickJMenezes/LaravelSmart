<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IhT28 extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['ih_t28_pac_reg', 'ih_t28_dthr_reg', 'ih_t28_hsp_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['ih_t28_hsp_num', 'ih_t28_hsp_num', 'ih_t28_pac_reg', 'ih_t28_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ih_t28_usr_login_reg'],
            ['usr_login'],
        );
    }
}
