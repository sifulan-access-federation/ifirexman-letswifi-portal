<?php declare(strict_types=1);

/*
 * This file is part of letswifi; a system for easy eduroam device enrollment
 *
 * Copyright: 2018-2020, Jørn Åne de Jong, Uninett AS <jorn.dejong@uninett.no>
 * SPDX-License-Identifier: BSD-3-Clause
 */

require \implode(\DIRECTORY_SEPARATOR, [\dirname(__DIR__, 2), 'src', '_autoload.php']);

$app = new letswifi\LetsWifiApp();
$app->registerExceptionHandler();

$app->render( [
	'href' => '/app/',
	'apps' => [
		'android' => [
			'url' => 'https://play.google.com/store/apps/details?id=app.eduroam.geteduroam',
			'name' => 'Android',
		],
		'ios' => [
			'url' => 'https://apps.apple.com/nl/app/geteduroam/id1504076137?l=en',
			'name' => 'iOS',
		],
		'windows' => [
			'url' => 'https://geteduroam.no/app/geteduroam.exe',
			'name' => 'Windows',
		],
	],
	'manual' => [
		'url' => '../profiles/new/',
	],
], 'app' );
