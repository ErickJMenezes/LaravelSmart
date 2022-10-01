<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class MsgPortal extends OracleEloquent
{
    use Compoships;

    protected $table = 'msg_portal';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['msg_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function emp(): BelongsTo
    {
        return $this->belongsTo(
            Emp::class,
            ['msg_emp_cod'],
            ['emp_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['msg_pac_reg'],
            ['pac_reg'],
        );
    }
}
