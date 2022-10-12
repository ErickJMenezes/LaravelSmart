<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class CrCls extends OracleEloquent
{
    use Compoships;

    protected $table = 'cr_cls';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['cr_cls_id'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function crCor(): BelongsTo
    {
        return $this->belongsTo(
            CrCor::class,
            ['cr_cls_cor_cod'],
            ['cr_cor_cod'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['cr_cls_pac_reg'],
            ['pac_reg'],
        );
    }

    public function crQpr(): BelongsTo
    {
        return $this->belongsTo(
            CrQpr::class,
            ['cr_cls_qpr_id'],
            ['cr_qpr_id'],
        );
    }

    public function crSnv(): BelongsTo
    {
        return $this->belongsTo(
            CrSnv::class,
            ['cr_cls_snv_id'],
            ['cr_snv_id'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['cr_cls_del_usr_login', 'cr_cls_usr_login'],
            ['usr_login', 'usr_login'],
        );
    }
}
