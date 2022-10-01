<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Chq extends OracleEloquent
{
    use Compoships;

    protected $table = 'chq';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['chq_ccr_banco', 'chq_numero'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bcp(): BelongsTo
    {
        return $this->belongsTo(
            Bcp::class,
            ['chq_bcp_num', 'chq_bcp_num', 'chq_bcp_serie', 'chq_bcp_serie'],
            ['bcp_num', 'bcp_serie', 'bcp_num', 'bcp_serie'],
        );
    }

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['chq_ccr_banco'],
            ['ccr_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['chq_usr_login_impresso', 'chq_usr_login_cancela', 'chq_usr_login_entrega'],
            ['usr_login', 'usr_login', 'usr_login'],
        );
    }
}
