<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Public extends Controller_Template
{

	public function before()
	{
		parent::before();
		$this->response = Response::forge();
		$this->response->set_header('X-FRAME-OPTIONS', 'SAMEORIGIN');
	}

	public function after($response)
	{
		$response = $this->response;
		$response->body = $this->template;
		return parent::after($response);
	}

}
