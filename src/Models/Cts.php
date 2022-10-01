<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cts extends OracleEloquent
{
    use Compoships;

    protected $table = 'cts';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cts_pac_reg', 'cts_dthr', 'cts_hsp_num', 'cts_cth_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cth(): BelongsTo
    {
        return $this->belongsTo(
            Cth::class,
            ['cts_cth_num', 'cts_cth_num', 'cts_cth_num', 'cts_hsp_num', 'cts_hsp_num', 'cts_hsp_num', 'cts_pac_reg', 'cts_pac_reg', 'cts_pac_reg'],
            ['cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg', 'cth_num', 'cth_hsp_num', 'cth_pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cts_usr_login'],
            ['usr_login'],
        );
    }
}
