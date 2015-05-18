<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// PHPのmail()関数をオーバーライド

namespace Email;

function mail($to, $subject, $message, $additional_headers, $additional_parameters)
{
	\Log::debug(
		'to:' . $to . ' ' .
		'subject:' . $subject . ' ' .
		'message:' . $message . ' ' .
		'additional_headers:' . $additional_headers . ' ' .
		'additional_parameters:' . $additional_parameters
	);
	$data = array(
		'to' => $to,
		'subject' => $subject,
		'message' => $message,
		'additional_headers' => $additional_headers,
		'additional_parameters' => $additional_parameters,
	);

	\Config::set('_tests.mail.data', $data);

	return true;
}
