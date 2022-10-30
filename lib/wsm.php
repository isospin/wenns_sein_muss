<?php
class wsm extends \rex_yform_manager_dataset
{
    # https://github.com/yakamara/redaxo_yform/blob/master/docs/04_yorm.md#yorm-mit-eigener-model-class-verwenden

    public function getName() :string
    {
        return $this->getValue('name');
    }
    public static function getConfig($key) 
    {
        rex_config::get("wenns_sein_muss", $key);
    }
    public static function setConfig($key, $value) 
    {
        rex_config::set("wenns_sein_muss", $key, $value);
    }
}
