<?php

namespace Numbers\Services\Services\Controller\Service;
class Channels extends \Object\Controller\Permission {
	public function actionIndex() {
		$form = new \Numbers\Services\Services\Form\List2\Service\Channels([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionEdit() {
		$form = new \Numbers\Services\Services\Form\Service\Channels([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionImport() {
		$form = new \Object\Form\Wrapper\Import([
			'model' => '\Numbers\Services\Services\Form\Service\Channels',
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}