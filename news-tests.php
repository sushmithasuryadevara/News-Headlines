<?php
/**
* Testing the actual and expected for equal assertion
*/
function getResponse() {
	$htmlResponse = $controller->buildPage($_REQUEST);

	$expected = "<html>whatever html you expect</html>";
	$test_request = array({countryCode: "us"}); // parameters to test
	$actual = $controller->buildPage($test_request);

	$this->assertEquals($expected, $actual);
}
?>
