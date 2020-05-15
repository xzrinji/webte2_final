<?php
function setLanguage()
{
    if(isset($_GET['lan']))
    {
        if($_GET['lan'] == 'sk')
        {
            require_once ('languages/lang_sk.php');
        }
        else{
            require_once ('languages/lang_en.php');
        }
    }
    else{
        require_once ('languages/lang_en.php');
    }
}
setLanguage();

?>