<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Error extends Controller_Template
{

	public function action_invalid($message = null)
	{
		if ($message === null)
		{
			return 'Invalid input data';
		} else
		{
			return e($message);
		}
	}

}
