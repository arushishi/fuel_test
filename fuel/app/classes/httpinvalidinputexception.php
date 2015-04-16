<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HttpInvalidInputException extends HttpException
{

	public function response()
	{
		$response = Request::forge('error/invalid')
				->execute(array($this->getMessage()))->response();
		return $response;
	}

}
