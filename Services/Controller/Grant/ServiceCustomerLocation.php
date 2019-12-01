<?php

namespace Numbers\Services\Services\Controller\Grant;
class ServiceCustomerLocation extends \Object\Controller\Permission {
	public function actionEdit() {
		$form = new \Numbers\Services\Services\Form\Grant\GrantServiceCustomerLocation([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}