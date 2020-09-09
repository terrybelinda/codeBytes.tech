<?php
		setcookie("userId", "1", time()+3600*24,"/",".jayasuryapinaki.me");		
		echo $_COOKIE['userId'];	 
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_URL,"http://codebytes.tech/sendMail.php" );
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle,CURLOPT_POSTFIELDS,
            "email=terrylinda13@gmail.com&age=value2&gender=value3");
			
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
		$contents = curl_exec($curl_handle);
		curl_close($curl_handle);
		foreach (explode(",",$contents) as $content) {
			echo $content."<br/>";
		}
									

 ?>