<?php

namespace Numbers\Services\Services\Controller;
class ServiceScripts extends \Object\Controller\Permission {
	public function actionIndex() {
		$form = new \Numbers\Services\Services\Form\List2\ServiceScripts([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionEdit() {
		$form = new \Numbers\Services\Services\Form\ServiceScripts([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionImport() {
		$form = new \Object\Form\Wrapper\Import([
			'model' => '\Numbers\Services\Services\Form\ServiceScripts',
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionActivate() {
		$form = new \Numbers\Services\Services\Form\ServiceScript\CreateVersion([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}