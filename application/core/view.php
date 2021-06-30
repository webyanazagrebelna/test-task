<?php
class View
{
    function generate($viewTemplate, $viewContent, $pageTitle=null, $x=null, $y=null, $z=null)
	{
        include 'application/views/' . $viewTemplate;
    }
}