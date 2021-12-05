<?php

declare(strict_types=1);

/*
 * This file is part of Contao InPageSearch Bundle.
 * 
 * (c) Bernhard Renner 2021 <bernhard@werbepanorama.at>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/berecont/contao-inpagesearch-bundle
 */

use Berecont\ContaoInpagesearchBundle\Controller\ContentElement\InpagesearchController;

/**
 * Content elements
 */
$GLOBALS['TL_DCA']['tl_content']['palettes'][InpagesearchController::TYPE] = '{type_legend},type,headline;{searchclass_legend},searchclass;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['searchclass'] = [
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['searchclass'],
    'inputType'     => 'text',
    'exclude'       => true,
    'eval' => [
        'tl_class'  => 'w50',
        'maxlength' => 255,
        'allowHtml' => false
    ],
    'sql'           => ['type' => 'string', 'length' => 255, 'default' => '']
];