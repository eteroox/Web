<?php
	session_start();
	
	$fb = new Facebook\Facebook([
	  'app_id' => '{1852311214865102}',
	  'app_secret' => '{4e58ce6f2543ac1ca5dd8bcddf387cf0}',
	  'default_graph_version' => 'v2.2',
	  ]);

	$helper = $fb->getJavaScriptHelper();

	try {
	  $accessToken = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	if (! isset($accessToken)) {
	  echo 'No cookie set or no OAuth data could be obtained from cookie.';
	  exit;
	}

	// Logged in
	echo '<h3>Access Token</h3>';
	var_dump($accessToken->getValue());

	$_SESSION['fb_access_token'] = (string) $accessToken;
	
	header('Location: /oglasnik/Web/oglasnik/index.php');
?>