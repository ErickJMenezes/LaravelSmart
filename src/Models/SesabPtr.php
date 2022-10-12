<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class SesabPtr extends OracleEloquent
{
    use Compoships;

    protected $table = 'sesab_ptr';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['sesab_ptr_dthr', 'sesab_ptr_ptc_cod', 'sesab_ptr_pac_reg'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function sesabPtc(): BelongsTo
    {
        return $this->belongsTo(
            SesabPtc::class,
            ['sesab_ptr_ptc_cod'],
            ['sesab_ptc_cod'],
        );
    }

    public function sesabReg(): BelongsTo
    {
        return $this->belongsTo(
            SesabReg::class,
            ['sesab_ptr_dthr', 'sesab_ptr_dthr', 'sesab_ptr_pac_reg', 'sesab_ptr_pac_reg'],
            ['sesab_reg_dthr', 'sesab_reg_pac_reg', 'sesab_reg_dthr', 'sesab_reg_pac_reg'],
        );
    }
}
