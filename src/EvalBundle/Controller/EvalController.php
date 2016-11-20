<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 20/11/16
 * Time: 14:44
 */

namespace EvalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EvalController extends Controller
{
    public function indexAction()
    {
        return $this->render('EvalBundle:Eval:index.html.twig');
    }
}
