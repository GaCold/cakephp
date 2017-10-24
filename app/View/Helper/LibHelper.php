<?php
/**
*  create by GaCold
*/
class LibHelper extends AppHelper {
	

	public function randdomNumber(){
		
		return md5(rand(1000, 9999));
	}
	
}