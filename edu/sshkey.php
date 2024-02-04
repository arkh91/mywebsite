<?php
/*  author: Ali Khazaeli
    date: 04/12/2020
*/
	//require_once("dbinfo.inc");
	$page_title = "Linux SSH Key Connection";
	$name = "Ali Khazaeli";
	require_once("./frontedu.php");
?>

<!-- Text source
 https://www.digitalocean.com/community/tutorials/how-to-configure-ssh-key-based-authentication-on-a-linux-server -->
<div class="page-section">
	<div class="container jumbotron " style="background-color:white">
       <h1>How to Set Up SFTP using SSH Keys on Linux</h1>
        <h2>Introduction</h2>
        
        <p>
            SSH, or secure shell, is an encrypted protocol used to administer and communicate with servers. When working with a Debian server, chances are you will spend most of your time in a terminal session connected to your server through SSH.</p>
        
        <p>
            In this guide, we'll focus on setting up SSH keys for a vanilla Debian 9 installation. SSH keys provide an easy, secure way of logging into your server and are recommended for all users.
        </p>
        <h2>Requirment</h2>
        <p>You need to have <kbd>sudo</kbd> access.</p>
        <!--
            Step 1
        -->
        <h3>Step 1 — Create the RSA Key Pair</h3>
        <p>
            The first step is to create a key pair on the client machine:
        </p>
        
        <pre style="background-color: black; color:white;">
			
    <samp style="color: yellow;">$ ssh-keygen -t rsa</samp>
        </pre>
        
        <p>
        By default <code>ssh-keygen</code> will create a 2048-bit RSA key pair, which is secure enough for most use cases (you may optionally pass in the <code>-b 4096</code> flag to create a larger 4096-bit key).
        </p>
        
        <p>After entering the command, you should see the following output:</p>
        
        <pre style="background-color: black; color:white;">
    Output <br>
    Generating public/private rsa key pair.<br>
    Enter file in which to save the key (/<samp style="color: skyblue;">your_home</samp>/.ssh/id_rsa):
        </pre>
        
 
        <p>
           Press enter to save the key pair into the .ssh/ subdirectory in your home directory, or specify an alternate path.
            <br><br>
            If you had previously generated an SSH key pair, you may see the following prompt:
        </p>
        
        <pre style="background-color: black; color:white;">
    Output <br>
    /home/<samp class="skyblue">your_home</samp>/.ssh/id_rsa already exists.
    Overwrite (y/n)?   
        </pre>
        
        
        <p>
        If you choose to overwrite the key on disk, you will not be able to authenticate using the previous key anymore. Be very careful when selecting yes, as this is a destructive process that cannot be reversed.
<br><br>
You should then see the following prompt:
        </p>
        
        <pre style="background-color: black; color:white;">
    Output<br>
    Enter passphrase (empty for no passphrase):
        </pre>
        
        <p>
        It's up to you whether you want to use a passphrase. Entering a passphrase does have its benefits: the security of a key, no matter how encrypted, still depends on the fact that it is not visible to anyone else. Should a passphrase-protected private key fall into an unauthorized users possession, they will be unable to log in to its associated accounts until they figure out the passphrase, buying the hacked user some extra time. The only downside, of course, to having a passphrase, is then having to type it in each time you use the key pair.<br><br>
         You should then see the following output:
        </p>

    <pre style="background-color: black; color:white;">
		
    Your identification has been saved in /<samp style="color: skyblue;">your_home</samp>/.ssh/id_rsa.
    Your public key has been saved in /<samp style="color: skyblue;">your_home</samp>/.ssh/id_rsa.pub.
    The key fingerprint is:
    SHA256:qFN5n0JubGEx6tVSDfGGxa7N+AA5hZyZDaey8EWbTnk root@instance-1 
    The key's randomart image is: 
    <samp class="line_space">
    +---[RSA 2048]----+
    |       .oB+o.    |
    |       .**o*.    |
    |    . . XoE.+    |
    |     o X+* ..    |
    |      B So.=     |
    |     + B ++.o    |
    |    o . * oo     |
    |     . o .  .    |
    |                 |
    +----[SHA256]-----+
    </samp>
    </pre>
        
        <p>
        You now have a public and private key that you can use to authenticate. The next step is to edit sshd_config so that you can use SSH-key-based authentication to log in.
        </p>
         <!--
            Step 2
        -->
        <h3>Step 2 — Edit sshd_config</h3>
        <pre style="background-color: black; color:white;">
			
    sudo nano /etc/ssh/sshd_config<br>
    PermitRootLogin prohibit-password to <samp style="color: yellow;">PermitRootLogin yes</samp> 
    PasswordAuthentication no to <samp style="color: yellow;"> PasswordAuthentication yes</samp> 
        </pre>
         <!--
            Step 3
        -->
        <h3>Step 3 — Restart ssh service</h3>        
        
        <pre style="background-color: black; color:white;">
			
   <samp class="yellow"> sudo service ssh restart</samp>
        </pre>
        
        <p>
        Now you can use SFTP (Secure File Transfer Protocal) using any  cross-platform FTP application like <a class="blue" href="https://filezilla-project.org/download.php"> FileZilla</a> or <a class="blue" href="https://cyberduck.io/">Cyberduck</a>.
        </p>
        
        <pre style="background-color: black; color:white;">
			
    Host: <samp style="color: skyblue;"> your_server_ip_address</samp>
    Username: <samp style="color: yellow;"> root</samp> 
    Password: <samp style="color: yellow;"> your password</samp> 
    Port: <samp style="color: skyblue;"> 21 (or leave it blank)</samp>
        </pre>
        
        <p>
        You can ssh to the server via terminal using:
        </p>
        <pre style="background-color: black; color:white;">
			
    ssh root@<samp style="color: skyblue;">your_server_ip_address</samp>    
        </pre>
        
        <p>
        Learn about adding a <a class="blue" href="./newuser.php">new user</a>. 
        </p>
        
     <div class="col-lg-6 wow fadeIn">
		<div class="embed-responsive embed-responsive-16by9 wow fadeInRight">
			<iframe class="embed-responsive-item" src="../media/digi320-.mp4" allowfullscreen></iframe>
        </div>
     </div>
            <!--
        <video controls>
    <source src="../media/digi320-.mp4" type="video/mp4" >
    <source src="../media/digi320.ogg" type="vide/ogg">
        Your browser does not support video.
            
        </video>-->
</div>
</div>
<!--footer -->
<?php
	require_once("./backedu.php");
?>
