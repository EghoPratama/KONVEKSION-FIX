<?php

require_once("PHPUnit/Framework/TestCase.php"); 
class tes extends PHPUnit_Framework_TestCase
{
	function testUsername()
	{
		include ("koneksi/connection.php");
		$login = mysqli_query($connect, "SELECT * FROM tbl_admin WHERE password = 'adminsatu'");
		$user = mysqli_num_rows($login);
		$test_user = $user['username'];
		
		$content = $test_user;
		$this->assertEquals('admin01',$content);
	}
	
	function testUsernameFalse()
	{
		include ("koneksi/connection.php");
		$login = mysqli_query($connect, "SELECT * FROM tbl_admin WHERE password = 'adminsatu'");
		$user = mysqli_num_rows($login);
		$test_user = $user['username'];
		
		$content = $test_user;
		$this->assertNotEquals('admin',$content);
	}
	
	function testPassword()
	{
		include ("koneksi/connection.php");
		$login = mysqli_query($connect, "SELECT * FROM tbl_admin WHERE username = 'admin01'");
		$user = mysqli_num_rows($login);
		$test_user = $user['password'];
		
		$content = $test_user;
		$this->assertEquals('adminsatu',$content);
	}
	
	function testPasswordFalse()
	{
		include ("koneksi/connection.php");
		$login = mysqli_query($connect, "SELECT * FROM tbl_admin WHERE username = 'admin01'");
		$user = mysqli_num_rows($login);
		$test_user = $user['password'];
		
		$content = $test_user;
		$this->assertNotEquals('admin',$content);
	}
}
?>