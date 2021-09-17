<?php

class Alerta
{

    function alert($color, $content)
    {
        echo "<div class='alert alert-$color' role='alert'>";
        echo $content;
        echo "</div>";
    }

    function alertGuacamole($color, $content)
    {

        echo "<div class='alert alert-$color alert-dismissible fade show' role='alert'>";
        echo $content;
        echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        echo " <span aria-hidden='true'>&times;</span>";
        echo "</button>";
        echo "</div>";
    }
}
