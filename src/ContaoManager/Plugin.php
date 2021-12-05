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

namespace Berecont\ContaoInpagesearchBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Berecont\ContaoInpagesearchBundle\BerecontContaoInpagesearchBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}
