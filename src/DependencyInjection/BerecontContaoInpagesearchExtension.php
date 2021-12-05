<?php

declare(strict_types=1);

/*
 * This file is part of Contao InPageSearch Bundle.
 * 
 * (c) Bernhard Renner 2021 <bernhard@werbepanorama.at>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/berecont/contao-inpagesearch-bundle
 */

namespace Berecont\ContaoInpagesearchBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class BerecontContaoInpagesearchExtension
 */
class BerecontContaoInpagesearchExtension extends Extension
{

    /**
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        $loader->load('parameters.yml');
        $loader->load('services.yml');
        $loader->load('listener.yml');

    }
}
