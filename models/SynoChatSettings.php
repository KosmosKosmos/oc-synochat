<?php namespace KosmosKosmos\SynoChat\Models;

use Model;

/**
 * SynoChatSettings Model
 */
class SynoChatSettings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'kosmoskosmos_synochat_syno_chat_settings';
    public $settingsFields = 'fields.yaml';
    /**
     * @var string The database table used by the model.
     */
    public $table = 'kosmoskosmos_synochat_syno_chat_settings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
