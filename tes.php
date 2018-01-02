<?php
 
class tes extends PHPUnit_Framework_TestCase
{
	function testUsername()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE password = 'adminsatu'";
		$login = mysqli_query($connect,$sql);
		$user = mysqli_num_rows($login);
		$test_user = $user['username'];
		
		$content = $test_user;
		$this->assertEquals('admin01',$content);
	}
	
	function testUsernameFalse()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE password = 'adminsatu'";
		$login = mysqli_query($connect,$sql);
		$user = mysqli_num_rows($login);
		$test_user = $user['username'];
		
		$content = $test_user;
		$this->assertNotEquals('admin',$content);
	}
	
	function testPassword()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE username = 'admin01'";
		$login = mysqli_query($connect,$sql);
		$user = mysqli_num_rows($login);
		$test_user = $user['password'];
		
		$content = $test_user;
		$this->assertEquals('adminsatu',$content);
	}
	
	function testPasswordFalse()
	{
		include ("koneksi/connection.php");
		$sql = "SELECT * FROM tbl_admin WHERE username = 'admin01'";
		$login = mysqli_query($connect,$sql);
		$user = mysqli_num_rows($login);
		$test_user = $user['password'];
		
		$content = $test_user;
		$this->assertNotEquals('admin',$content);
	}
}
?>