<?php 


    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p>This is demo page.Check how you exploit this vulnerability.</p>

        <p>Local File Inclusion (also known as LFI) is the process of including files, that are already locally present on the server, through the exploiting of vulnerable inclusion procedures implemented in the application.</p>

        <p>For more details: https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion
        </p>";
    }
    
?>
    


