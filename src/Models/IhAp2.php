<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class IhAp2 extends OracleEloquent
{
    use Compoships;

    protected $table = 'ih_ap2';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ih_ap2_dthr_reg', 'ih_ap2_pac_reg', 'ih_ap2_hsp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['ih_ap2_hsp_num', 'ih_ap2_hsp_num', 'ih_ap2_pac_reg', 'ih_ap2_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ih_ap2_usr_login_reg'],
            ['usr_login'],
        );
    }
}
