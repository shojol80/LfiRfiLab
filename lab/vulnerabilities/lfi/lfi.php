<?php 


    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p>This is demo page.Check how you exploit this vulnerability.</p>

        <p>For more details: https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion
        </p>";
    }
    
?>
    


