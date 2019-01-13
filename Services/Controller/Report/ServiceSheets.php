<?php

namespace Numbers\Services\Services\Controller\Report;
class ServiceSheets extends \Object\Controller\Permission {
	public function actionIndex() {
		$form = new \Numbers\Services\Services\Form\Report\ServiceScheets([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}