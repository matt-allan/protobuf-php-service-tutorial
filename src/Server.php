<?php

declare(strict_types=1);

namespace Yuloh\Math;

class Server
{
	public function run(): void
	{
		$method = ltrim(rawurldecode($_SERVER['REQUEST_URI']), '/');

		switch ($method) {
			case 'add':
				$request = new AddRequest();
				$request->mergeFromString(file_get_contents('php://input'));
				$reply = (new Calculator())->add($request);
				echo $reply->serializeToString();
				break;
			case 'subtract':
				$request = new SubtractRequest();
				$request->mergeFromString(file_get_contents('php://input'));
				$reply = (new Calculator())->subtract($request);
				echo $reply->serializeToString();
				break;
			default:
				http_response_code(404);
		}
	}
}