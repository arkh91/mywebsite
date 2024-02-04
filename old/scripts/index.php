<?php
	$css_file = "../css/index-project.css";	
	$css_file2 = "../css/project-main.css";
	echo $css_file;
	require ("front.php");
?>



<div class="content">
        <br>
        <h1>How to Add a new user on Linux</h1>
        <p>
        This guide will show you the easiest way to create a new user with sudo access on Ubuntu, without having to modify your server's sudoers file. If you want to configure sudo for an existing user, simply skip to step 3.
        </p>
        
        <h2>Requirment</h2>
        
        <p>You need to have <b><i>sudo</i></b> access.</p>
        <h3>Step 1 — Log in to your server as the <i>root user</i>.</h3>

        <pre>
    ssh root@<samp class="skyblue">your_server_ip_address</samp>
        </pre>
        
        <h3>Step 2 - Use the <i>adduser</i> command to add a new user to your system.</h3>

        <p>Be sure to replace <samp class="greybackground"> username</samp> with the user that you want to create.</p>
        
        <pre>
    adduser username    
        </pre>
        
        <div class="leftpadding">
        <p>Set and confirm the new user's password at the prompt. A strong password is highly recommended!</p>
            
        <pre>
    Output <br>
    Enter new UNIX password: <br>
    Retype new UNIX password: <br>
    passwd: password updated successfully
        </pre>
        <p>Follow the prompts to set the new user's information. It is fine to accept the defaults to leave all of this information blank.</p>
            
        <pre>
    Output <br>
    Changing the user information for username <br>
    Enter the new value, or press ENTER for the default <br>
        Full Name []: <br>
        Room Number []: <br>
        Work Phone []: <br>
        Home Phone []: <br>
        Other []: <br>
    Is the information correct? [Y/n]
        </pre>    
        
        <p>If you dont need the user to have sudo access. You're job is done.</p>    
            
        </div> <!-- end of left padding step 3-->
        
        <h3>Step 3 - Use the <i>usermod</i> command to add the user to the sudo group.</h3>
        
        <pre>
    usermod -aG sudo username    
        </pre>
        
        <p>By default, members of the sudo group have sudo privileges.</p>
        
        <h3>Step 4 - Test sudo access on new user account</h3>
        <div class="leftpadding">
            
        <p> Use the su command to switch to the new user account. </p>
            
        <pre>
    su - username
        </pre>
        
         <p> As the new user, verify that you can use sudo by prepending "sudo" to the command that you want to run with superuser privileges. </p>   
        <pre>
    sudo command_to_run
        </pre>    
        
        <p> For example, you can list the contents of the /root directory, which is normally only accessible to the root user. </p>    
            
        <pre>
    sudo ls -la /root    
        </pre>    
        
        <p>The first time you use sudo in a session, you will be prompted for the password of the user account. Enter the password to proceed. </p>    
        
        <pre>
    Output <br>
    [sudo] password for username:    
        </pre>    
        
        <p>If your user is in the proper group and you entered the password correctly, the command that you issued with sudo should run with root privileges.</p>    
            
        </div> <!-- end of left padding step 4 -->


<?php 
	require ("end.php");
?>

