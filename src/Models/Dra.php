<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Dra extends OracleEloquent
{
    use Compoships;

    protected $table = 'dra';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['dra_pac_reg', 'dra_num', 'dra_hsp_num'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function cid(): BelongsTo
    {
        return $this->belongsTo(
            Cid::class,
            ['dra_cid_cod', 'dra_cid_cod', 'dra_cid_tip', 'dra_cid_tip'],
            ['cid_tip', 'cid_cod', 'cid_tip', 'cid_cod'],
        );
    }

    public function hsp(): BelongsTo
    {
        return $this->belongsTo(
            Hsp::class,
            ['dra_hsp_num', 'dra_hsp_num', 'dra_pac_reg', 'dra_pac_reg'],
            ['hsp_num', 'hsp_pac', 'hsp_num', 'hsp_pac'],
        );
    }
}
