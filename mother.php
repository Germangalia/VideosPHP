<?php
class Mother {
	function getEyeCount() {
	return 2;
	}
}

class Child extends Mother{
}

(new Child)->getEyeCount;

?>