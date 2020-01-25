<?php

namespace Kanboard\Plugin\Essential;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        global $themeEssentialConfig;

        if (file_exists('plugins/Essential/config.php')) 
        {
            require_once('plugins/Essential/config.php');
        }

        if (file_exists('plugins/Customizer')) 
		{
            $this->template->setTemplateOverride('header/title', 'Essential:layout/header/customizerTitle');
            $this->template->setTemplateOverride('layout', 'Essential:layout');
		}
			elseif (isset($themeEssentialConfig['logo'])) 
        {
            $this->template->setTemplateOverride('header/title', 'Essential:layout/header/title');
            $this->template->setTemplateOverride('layout', 'Essential:layout');
        } else {
            $this->template->setTemplateOverride('layout', 'Essential:layout');
        }
		
        $this->hook->on("template:layout:css", array("template" => "plugins/Essential/Assets/css/essential.css"));
        $this->hook->on('template:layout:js', array('template' => 'plugins/Essential/Assets/js/essential.js'));
    }

    public function getPluginName()
    {
        return 'Essential';
    }

    public function getPluginDescription()
    {
        return t('Essential theme returns a new style to your kanboard.');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.1.3'; 
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/Essential';
    }

}
