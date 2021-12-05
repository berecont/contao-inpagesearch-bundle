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

namespace Berecont\ContaoInpagesearchBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class InpagesearchController
 *
 * @ContentElement(InpagesearchController::TYPE, category="werbepanorama", template="ce_inpagesearch")
 */
class InpagesearchController extends AbstractContentElementController
{
    public const TYPE = 'inpagesearch';

    /**
     * Generate the content element
     */
    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
        $template->searchclass = $model->searchclass;

        /* add class to template */
        $cssClasses = [];
        $cssClass = implode(' ',$cssClasses);
        $template->cssClass = $cssClass;
        $template->class .= ' '.$cssClass;
        

        return $template->getResponse();
    }

}

$GLOBALS['TL_CSS'][] = 'bundles/berecontcontaoinpagesearch/css/inpagesearch.css|static';
