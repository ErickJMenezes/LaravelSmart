<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Aud extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['aud_serie', 'aud_num'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['aud_mot_cod', 'aud_mot_cod', 'aud_mot_tipo', 'aud_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function pad(): BelongsTo
    {
        return $this->belongsTo(
            Pad::class,
            ['aud_pad_num'],
            ['pad_num'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['aud_usr_login'],
            ['usr_login'],
        );
    }
}
