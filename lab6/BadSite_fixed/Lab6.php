<?php
	/*author: Sarah Carruthers
	  date: Spring 2020
	  modified by:
	  purpose: landing page for bad lab
	*/
	require_once("dbinfo.inc");
	$page_title = "Lab 6 Start Page";
	$name = "Sarah 'not so secure' Carruthers";
	require_once("front.php");
?>
<header><h1>Welcome to Lab 6</h1></header>
<div class="mainContainer text-left">

	<p>For this lab, your task is to identify and fix all security problems found
	in the following files:</p>
	<ul>
		<li><a href="insertBook.php">Insert Book</a></li>
		<li><a href="showBooks.php">Show Books by Author</a></li>
		<li><a href="showAll.php">Show All Books</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="register.php">Register</a></li>
	</ul>
	<p>There are problems in every one of those files.  The problems include (but may not be 
	limited to):</p>
	<ul>
		<li>SQL Injection</li>
		<li>XSS</li>
		<li>Lack of validation</li>
		<li>Lack of sanitization</li>
	</ul>
</div>
<?php
	require_once("back.php");
?>