<?php
/**
*обслуживание плагина Ckfinder
 */

namespace Mf\Ckfinder;


class Module
{

public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }


}
