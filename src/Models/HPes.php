<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class HPes extends OracleEloquent
{
    use Compoships;

    protected $table = 'h_pes';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['h_pes_pac_reg', 'h_pes_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['h_pes_pac_reg'],
            ['pac_reg'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['h_pes_reg_usr_login'],
            ['usr_login'],
        );
    }
}
