<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Rla extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['rla_id'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function amo(): BelongsTo
    {
        return $this->belongsTo(
            Amo::class,
            ['rla_amo_cod'],
            ['amo_cod'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['rla_transporte', 'rla_transporte', 'rla_transporte_tipo', 'rla_transporte_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['rla_str_cod'],
            ['str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['rla_usr_responsavel'],
            ['usr_login'],
        );
    }
}
