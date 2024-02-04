<!DOCTYPE html>
<!-- Author: Sarah Carruthers
 contains header and link info for all pages
 Spring 2020
 Modified by:
-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta charset="utf-8"/>
<title><?php echo $page_title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./styles.css" rel="stylesheet">
     <link href="./myStyles.css" rel="stylesheet"></head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="Lab6.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="showAll.php">All Books</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="showBooks.php">Books by Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insertBook.php">Add Book</a>
          </li>
		  <li class="nav-item">
			<a class="nav-link" href="login.php">Login</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>
	  
        </ul>
        
      </div>
    </nav>
<main role="main" class="container">
<div class="starter-template">
    
