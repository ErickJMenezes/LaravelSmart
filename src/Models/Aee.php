<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Yajra\Oci8\Eloquent\OracleEloquent;

class Aee extends OracleEloquent
{
    use Compoships;

    protected $table = 'aee';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['aee_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['aee_ccr_banco', 'aee_ccr_trans'],
            ['ccr_cod', 'ccr_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['aee_usr_login_reg'],
            ['usr_login'],
        );
    }
}
