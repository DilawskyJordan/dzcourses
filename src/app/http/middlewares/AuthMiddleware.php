<?php 

class AuthMiddleware {

	public function before($container, $baseUrl, $httpMethod, $params) {
		if(!$container->get("Session")->has("loggedIn")) {
			$container->get("Helper")->r($container, "teacherLogin");
			exit;
		}
		return true;
	}

	public function after($container, $baseUrl, $httpMethod, $params) {
		// do something after the application
	}

}