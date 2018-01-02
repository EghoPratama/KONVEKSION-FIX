<?php
 
class tes extends PHPUnit_Framework_TestCase
{
	function testUsername()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE password = 'adminsatu'";
		$login = mysqli_query($connect,$sql);
		foreach($login as $test_user){
			$content= $test_user['username'];
		}	
		return $this->assertEquals('admin01',$content);
	}
	
	function testUsernameFalse()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE password = 'adminsatu'";
		$login = mysqli_query($connect,$sql);
		$user = mysqli_num_rows($login);
		foreach($login as $test_user){
			$content= $test_user['username'];
		}	
		return $this->assertEquals('admin',$content);
	}
	
	function testPassword()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE username = 'admin01'";
		$login = mysqli_query($connect,$sql);
		foreach($login as $test_user){
			$content= $test_user['password'];
		}	
		return $this->assertEquals('adminsatu',$content);
	}
	
	function testPasswordFalse()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE username = 'admin01'";
		$login = mysqli_query($connect,$sql);
		foreach($login as $test_user){
			$content= $test_user['password'];
		}	
		return $this->assertEquals('admin',$content);
	}
}
?>