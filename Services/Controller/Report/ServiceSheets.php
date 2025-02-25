<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Services\Services\Controller\Report;

use Numbers\Services\Services\Form\Report\ServiceScheets;
use Object\Controller\Permission;

class ServiceSheets extends Permission
{
    public function actionIndex()
    {
        $form = new ServiceScheets([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
}
