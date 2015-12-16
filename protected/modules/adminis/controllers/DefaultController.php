<?php

class DefaultController extends SBaseController
{
	public function actionIndex()
	{
		$this->render('index');
	}
}