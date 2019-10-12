<?php

namespace Numbers\Services\Services\Controller;
class Workflows extends \Object\Controller\Permission {
	public function actionIndex() {
		$form = new \Numbers\Services\Services\Form\List2\Workflows([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionEdit() {
		$form = new \Numbers\Services\Services\Form\Workflows([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionImport() {
		$form = new \Object\Form\Wrapper\Import([
			'model' => '\Numbers\Services\Services\Form\Workflows',
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}