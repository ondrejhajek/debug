<?php

function printr()
{
	if (!headers_sent()) header('Content-type:text/html; charset=utf-8');

	$is_cli = php_sapi_name() == 'cli';

	echo(!$is_cli ? '<pre>' : '');

	foreach (func_get_args() as $arr)
	{
		print_r($arr);

		if (!is_array($arr) && !is_object($arr)) echo(!$is_cli ? '<br />' : "\n");
	}

	echo(!$is_cli ? '</pre>' : '');
}

function printre()
{
	if (!headers_sent()) header('Content-type:text/html; charset=utf-8');

	$is_cli = php_sapi_name() == 'cli';

	echo(!$is_cli ? '<pre>' : '');

	foreach (func_get_args() as $arr)
	{
		print_r($arr);

		if (!is_array($arr) && !is_object($arr)) echo(!$is_cli ? '<br />' : "\n");
	}

	exit(!$is_cli ? '</pre>' : '');
}

function vardump()
{
	if (!headers_sent()) header('Content-type:text/html; charset=utf-8');

	$is_cli = php_sapi_name() == 'cli';

	echo(!$is_cli ? '<pre>' : '');

	foreach (func_get_args() as $arr)
	{
		var_dump($arr);

		if (!is_array($arr) && !is_object($arr)) echo(!$is_cli ? '<br />' : "\n");
	}

	echo(!$is_cli ? '</pre>' : '');
}

function vardumpe()
{
	if (!headers_sent()) header('Content-type:text/html; charset=utf-8');

	$is_cli = php_sapi_name() == 'cli';

	echo(!$is_cli ? '<pre>' : '');

	foreach (func_get_args() as $arr)
	{
		var_dump($arr);

		if (!is_array($arr) && !is_object($arr)) echo(!$is_cli ? '<br />' : "\n");
	}

	exit(!$is_cli ? '</pre>' : '');
}

