<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// AspectMock\Testクラスをtestとしてインポート
use AspectMock\Test as test;

abstract class AmTestCase extends \Fuel\Core\TestCase
{

	protected function tearDown()
	{
		test::clean(); // 登録したモックをすべて削除
	}

}
