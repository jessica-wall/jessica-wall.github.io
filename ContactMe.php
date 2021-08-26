<style>
	body {
		background-image: url('Background.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>

<HTML>
    <HEAD>
        <link rel="stylesheet" href="BaseCSS.css">
		<link rel="stylesheet" href="ContactMeCSS.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        
    </HEAD>
    
    <HEADER>
        <TABLE width="100%" >
            <COL style="width:22%">
            <COL style="width:12.5%">
            <COL style="width:2%">
            <COL style="width:12.5%">
            <COL style="width:2%">
            <COL style="width:12.5%">
            <COL style="width:2%">
            <COL style="width:12.5%">
            <COL style="width:22%">   
            <TR>
                <TD align="left"> 
                    <img src="Logo.png" style="width:75%">
                </TD>
                <TD align="center">
                    <a href="Home.html">
                        HOME
                    </a>
                </TD>
                <TD>
                    <P>
                        |
                    </P>
                </TD>
                <TD align="center">
                    <a href="Portfolio.html"> 
                        PORTFOLIO
                    </a>
                </TD>
                <TD>
                    <P>
                        |
                    </P>
                </TD>
                <TD align="center">
                    <a href="AboutMe.html">
                        ABOUT ME
                    </a>
                </TD>
                <TD>
                    <P>
                        |
                    </P>
                </TD>
                <TD align="center">
                    <a href="ContactMe.html">
                        CONTACT ME
                    </a>
                </TD>
                <TD>
                </TD>
            </TR>
        </TABLE>
		
		<HR />
		
    </HEADER>
		
	<BODY>
	
		<TABLE background-color="#AED9E0">
			<TR height="150px">
				<TD>
				
				</td>
			</tr>
		</table>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<h>
			<CENTER>
				Contact Form
			</center>
		</h>

		<div class="container">
			<form method="post" name="emailForm" action="ContactMe.php">
				<label for="name">Name</label>
				<input type="text" name="Name" placeholder="Your name..">

				<label for="emailAddress">Email Address</label>
				<input type="text" name="emailAddress" placeholder="Your email address..">

				<label for="subject">Message</label>
				<textarea  name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Send">
				<input type="reset" value="Reset">
			</form>
		</div>

	
	
		<TABLE background-color="#AED9E0">
			<TR height="100px">
				<TD>
				
				</td>
			</tr>
		</table>		
		
    </BODY>
	
    <FOOTER>
        <br>
			<h>
				Find Me On Social Media
			</h>
			<TABLE width="100%" >
                <COL style="width:29.25%">
                <COL style="width:12.5%">
                <COL style="width:2%">
                <COL style="width:12.5%">
                <COL style="width:2%">
                <COL style="width:12.5%">
                <COL style="width:29.25%">   
                <TR>
					<TD>
					</td>
                    <TD align="center">
                        <a href="https://www.linkedin.com/in/jessica-wall-99bbb1197/">
                            LinkedIn
                        </a>
                    </TD>
                    <TD>
                        <P>
                            |
                        </P>
                    </TD>
                    <TD align="center">
                        <a href="https://github.com/jessica-wall"> 
                            GitHub
                        </a>
                    </TD>
                    <TD>
                        <P>
                            |
                        </P>
                    </TD>
                    <TD align="center">
                        <a href="https://www.instagram.com/jess311201/">
                            Instagram
                        </a>
                    </TD>
                    <TD>

                    </TD>
                </TR>
            </TABLE>        
    </FOOTER>
</HTML>


<?php
  $name = $_POST["name"];
  $visitorEmail = $_POST["email"];
  $message = $_POST["message"];
  
  $emailFrom = 'wall.jessica31@gmail.com';
  $emailSubject = "New Form submission";
  $emailBody = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
  $to = "wall.jessica31@gmail.com";
  $headers = "From: $emailFrom \r\n";
  $headers .= "Reply-To: $visitorEmail \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>




