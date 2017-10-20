<?php 


    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p>This is demo page.Check how you exploit this vulnerability.</p>

        <p>Remote File Include (RFI) is an attack technique used to exploit  \" dynamic file include \" mechanisms in web applications. When web applications take user input (URL, parameter value, etc.) and pass them into file include commands, the web application might be tricked into including remote files with malicious code.</p>

        <p>For more details: https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion
        </p>";
    }
    
?>
    


