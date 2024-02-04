<?php
/*  author: Ali Khazaeli
    date: 04/12/2020
*/
	//require_once("dbinfo.inc");
	$page_title = "Linux New User";
	$name = "Ali Khazaeli";
	require_once("./frontedu.php");
?>
<div class="page-section">
	<div class="container jumbotron " style="background-color:white">
               <br>
        <h1>How to Add a new user on Linux</h1>
        <p>
        This guide will show you the easiest way to create a new user with sudo access on Ubuntu, without having to modify your server's sudoers file. If you want to configure sudo for an existing user, simply skip to step 3.
        </p>
        
        <h2>Requirment</h2>
        
        <p>You need to have <kbd>sudo</kbd> access.</p>
        <h3>Step 1 — Log in to your server as the <i>root user</i>.</h3>

        <pre style="background-color: black; color:white;">
			
    ssh root@<samp style="color: skyblue;">your_server_ip_address</samp>
        </pre>
        
        <h3>Step 2 - Use the <i>adduser</i> command to add a new user to your system.</h3>

        <p>Be sure to replace <samp class="greybackground"> username</samp> with the user that you want to create.</p>
        
        <pre style="background-color: black; color:white;">
			
    adduser username    
        </pre>
        
        <div class="leftpadding">
        <p>Set and confirm the new user's password at the prompt. A strong password is highly recommended!</p>
            
        <pre style="background-color: black; color:white;">
    Output 
    
    Enter new UNIX password: 
    Retype new UNIX password: 
    passwd: password updated successfully
        </pre>
        <p>Follow the prompts to set the new user's information. It is fine to accept the defaults to leave all of this information blank.</p>
            
        <pre style="background-color: black; color:white;">
    Output
    
    Changing the user information for username 
    Enter the new value, or press ENTER for the default
        Full Name []: 
        Room Number []: 
        Work Phone []: 
        Home Phone []: 
        Other []: 
    Is the information correct? [Y/n]
        </pre>    
        
        <p>If you dont need the user to have sudo access. You're job is done.</p>    
            
        </div> <!-- end of left padding step 3-->
        
        <h3>Step 3 - Use the <i>usermod</i> command to add the user to the sudo group.</h3>
        
        <pre style="background-color: black; color:white;">
			
    usermod -aG sudo username    
        </pre>
        
        <p>By default, members of the sudo group have sudo privileges.</p>
        
        <h3>Step 4 - Test sudo access on new user account</h3>
        <div class="leftpadding">
            
        <p> Use the su command to switch to the new user account. </p>
            
        <pre style="background-color: black; color:white;">
			
    su - username
        </pre>
        
         <p> As the new user, verify that you can use sudo by prepending "sudo" to the command that you want to run with superuser privileges. </p>   
        <pre style="background-color: black; color:white;">
			
    sudo command_to_run
        </pre>    
        
        <p> For example, you can list the contents of the /root directory, which is normally only accessible to the root user. </p>    
            
        <pre style="background-color: black; color:white;">
			
    sudo ls -la /root    
        </pre>    
        
        <p>The first time you use sudo in a session, you will be prompted for the password of the user account. Enter the password to proceed. </p>    
        
        <pre style="background-color: black; color:white;">
    Output 
    
    [sudo] password for username:    
        </pre>    
        
        <p>If your user is in the proper group and you entered the password correctly, the command that you issued with sudo should run with root privileges.</p>    
            
        </div> <!-- end of left padding step 4 -->
</div>
</div>
<!--footer -->
<?php
	require_once("./backedu.php");
?>
