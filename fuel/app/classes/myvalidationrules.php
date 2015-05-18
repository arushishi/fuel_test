<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MyValidationRules
{

	/**
	 * 改行コードやタブが含まれていないかの検証ルール
	 *
	 * @param string $value
	 * @return boolean
	 */
	public static function _validation_no_tab_and_newline($value)
	{
		// 改行コードやタブが含まれていないか
		if (preg_match('/\A[^\r\n\t]*\z/u', $value) === 1)
		{
			// 含まれていない場合はtrueを返す
			return true;
		} else
		{
			// 含まれている場合はfalseを返す
			return false;
		}
	}

}
