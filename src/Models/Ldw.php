<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Ldw extends OracleEloquent
{
    use Compoships;

    protected $table = 'ldw';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['ldw_num', 'ldw_smk_tipo', 'ldw_smk_cod'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function smk(): BelongsTo
    {
        return $this->belongsTo(
            Smk::class,
            ['ldw_smk_cod', 'ldw_smk_cod', 'ldw_smk_tipo', 'ldw_smk_tipo'],
            ['smk_cod', 'smk_tipo', 'smk_cod', 'smk_tipo'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['ldw_usr_reg'],
            ['usr_login'],
        );
    }
}
