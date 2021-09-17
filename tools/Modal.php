<?php



class Modal
{

    function modalInfo($color, $title, $content)
    {
        echo  "<div class='modal fade' id='modalInfo' tabindex='-1' role='dialog' aria-labelledby='modalInfoLabel' aria-hidden='true'>";
        echo  "<div class='modal-dialog' role='document'>";
        echo  "<div class='modal-content'>";
        echo  "<div class='modal-header'>";
        echo  "<h5 class='modal-title text-$color' id='modalInfoLabel'>$title</h5>";
        echo  "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        echo  "<span aria-hidden='true'>&times;</span>";
        echo  "</button>";
        echo  "</div>";
        echo  "<div class='modal-body'>";
        echo $content;
        echo  "</div>";
        echo  "<div class='modal-footer'>";
        echo  "<button type='button' class='btn btn-primary' data-dismiss='modal'>Aceptar</button>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo "<script>$('#modalInfo').modal('show')</script>";
    }

    function modalAlerta($color, $title, $content)
    {
        echo  "<div class='modal fade' id='modalAlerta' tabindex='-1' role='dialog' aria-labelledby='modalAlertaLabel' aria-hidden='true' data-keyboard='false' data-backdrop='static'>";
        echo  "<div class='modal-dialog' role='document'>";
        echo  "<div class='modal-content'>";
        echo  "<div class='modal-header'>";
        echo  "<h5 class='modal-title text-$color' id='modalAlertaLabel'>$title</h5>";
        echo  "<button type='button' class='close' data-dismiss='modal' id='btn-close' aria-label='Close'>";
        echo  "<span aria-hidden='true'>&times;</span>";
        echo  "</button>";
        echo  "</div>";
        echo  "<div class='modal-body'>";
        echo $content;
        echo  "</div>";
        echo  "<div class='modal-footer'>";
        echo  "<button type='button' class='btn btn-primary' id='btn-aceptar'>Aceptar</button>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo "<script>$('#modalAlerta').modal('show')</script>";
        echo "<script>$('#btn-aceptar').click(function(){location.reload()});</script>";
        echo "<script>$('#btn-close').click(function(){location.reload()});</script>";
    }

    function modalUpdate($title, $content)
    {
        echo  "<div class='modal fade' id='modalUpdate' tabindex='-1' role='dialog' aria-labelledby='modalUpdateLabel' aria-hidden='true' data-keyboard='false' data-backdrop='static'>";
        echo  "<div class='modal-dialog' role='document'>";
        echo  "<div class='modal-content'>";
        echo  "<div class='modal-header'>";
        echo  "<h5 class='modal-title' id='modalUpdateLabel'>$title</h5>";
        echo  "<button type='button' class='close' data-dismiss='modal' id='btn-close' aria-label='Close'>";
        echo  "<span aria-hidden='true'>&times;</span>";
        echo  "</button>";
        echo  "</div>";
        echo  "<div class='modal-body'>";
        echo $content;
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo "<script>$('#modalUpdate').modal('show')</script>";
        echo "<script>$('#btn-close').click(function(){location.reload()});</script>";
    }
}
