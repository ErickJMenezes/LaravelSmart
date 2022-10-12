<?php

namespace ErickJMenezes\LaravelSmart\Models;

use Yajra\Oci8\Eloquent\OracleEloquent;
use \Awobaz\Compoships\Compoships;
use Awobaz\Compoships\Database\Eloquent\Relations\HasMany;
use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;

class Mte extends OracleEloquent
{
    use Compoships;

    protected $table = 'mte';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['mte_serie', 'mte_seq'];

    protected $connection = 'smart';

    protected $guarded = [];

    public function ccr(): BelongsTo
    {
        return $this->belongsTo(
            Ccr::class,
            ['mte_outros_ccr_receita'],
            ['ccr_cod'],
        );
    }

    public function cfo(): BelongsTo
    {
        return $this->belongsTo(
            Cfo::class,
            ['mte_outros_cfo_receita'],
            ['cfo_cod'],
        );
    }

    public function cpg(): BelongsTo
    {
        return $this->belongsTo(
            Cpg::class,
            ['mte_cpg_num_troco', 'mte_cpg_num_troco', 'mte_cpg_serie_troco', 'mte_cpg_serie_troco'],
            ['cpg_num', 'cpg_serie', 'cpg_num', 'cpg_serie'],
        );
    }

    public function mot(): BelongsTo
    {
        return $this->belongsTo(
            Mot::class,
            ['mte_canc_mot_cod', 'mte_canc_mot_cod', 'mte_canc_mot_tipo', 'mte_canc_mot_tipo'],
            ['mot_cod', 'mot_tipo', 'mot_cod', 'mot_tipo'],
        );
    }

    public function nfs(): BelongsTo
    {
        return $this->belongsTo(
            Nfs::class,
            ['mte_nfs_serie', 'mte_nfs_serie', 'mte_nfs_serie', 'mte_nfs_tipo', 'mte_nfs_tipo', 'mte_nfs_tipo', 'mte_nfs_numero', 'mte_nfs_numero', 'mte_nfs_numero'],
            ['nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero', 'nfs_serie', 'nfs_tipo', 'nfs_numero'],
        );
    }

    public function osm(): BelongsTo
    {
        return $this->belongsTo(
            Osm::class,
            ['mte_osm', 'mte_osm', 'mte_osm_serie', 'mte_osm_serie'],
            ['osm_num', 'osm_serie', 'osm_num', 'osm_serie'],
        );
    }

    public function ppo(): BelongsTo
    {
        return $this->belongsTo(
            Ppo::class,
            ['mte_ppo_cod'],
            ['ppo_cod'],
        );
    }

    public function mtes(): HasMany
    {
        return $this->hasMany(
            Mte::class,
            ['mte_seq', 'mte_serie', 'mte_seq', 'mte_serie'],
            ['mte_seq', 'mte_seq', 'mte_serie', 'mte_serie'],
        );
    }

    public function pac(): BelongsTo
    {
        return $this->belongsTo(
            Pac::class,
            ['mte_pac_reg'],
            ['pac_reg'],
        );
    }

    public function str(): BelongsTo
    {
        return $this->belongsTo(
            Str::class,
            ['mte_str_recep'],
            ['str_cod'],
        );
    }

    public function tca(): BelongsTo
    {
        return $this->belongsTo(
            Tca::class,
            ['mte_tca_cod'],
            ['tca_cod'],
        );
    }

    public function tdc(): BelongsTo
    {
        return $this->belongsTo(
            Tdc::class,
            ['mte_tdc_cod'],
            ['tdc_cod'],
        );
    }

    public function usr(): BelongsTo
    {
        return $this->belongsTo(
            Usr::class,
            ['mte_usr_login', 'mte_usr_login_cancela'],
            ['usr_login', 'usr_login'],
        );
    }
}
