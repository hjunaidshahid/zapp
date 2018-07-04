<?php

namespace User;

use Zend\Stdlib\ArrayUtils;

class Module
{

    public function getConfig()
    {
        $config = array();
        $configFiles = array(
            include __DIR__ . '/config/module.config.php'
        );
        foreach($configFiles as $file)
        {
            $config = ArrayUtils::merge($config, $file);
        }
        return $config;
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
            )
        );
    }

    public function getServiceConfig()
    {
        return array(

        );
    }
}
