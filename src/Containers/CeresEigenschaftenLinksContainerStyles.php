<?php
 
namespace CeresEigenschaftenLinks\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class CeresEigenschaftenLinksContainerStyles
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresEigenschaftenLinks::content.CeresEigenschaftenLinksStyles');
    }
}