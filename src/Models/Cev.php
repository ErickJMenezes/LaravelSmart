<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Cev extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['cev_seq'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function cnv(): BelongsTo
    {
        return $this->belongsTo(
            Cnv::class,
            ['cev_cnv_cod'],
            ['cnv_cod'],
        );
    }

    public function eve(): BelongsTo
    {
        return $this->belongsTo(
            Eve::class,
            ['cev_eve_cod'],
            ['eve_cod'],
        );
    }

    public function lta(): BelongsTo
    {
        return $this->belongsTo(
            Lta::class,
            ['cev_lta_cod'],
            ['lta_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cev_usr_login'],
            ['usr_login'],
        );
    }
}
