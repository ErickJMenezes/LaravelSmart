<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Usb extends OracleEloquent
{
    use Compoships;

    protected $primaryKey = ['usb_usr_login', 'usb_bnc_str_cod', 'usb_bnc_cod'];

    protected $connection = 'oracle';

    protected $guarded = [];

    public function bnc(): BelongsTo
    {
        return $this->belongsTo(
            Bnc::class,
            ['usb_bnc_cod', 'usb_bnc_cod', 'usb_bnc_str_cod', 'usb_bnc_str_cod'],
            ['bnc_cod', 'bnc_str_cod', 'bnc_cod', 'bnc_str_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['usb_usr_login'],
            ['usr_login'],
        );
    }
}
