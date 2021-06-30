<?php
class View
{
    function generate($viewTemplate, $viewContent, $pageTitle=null, $res=null, $y=null, $z=null)
	{
        include 'application/views/' . $viewTemplate;
    }
}
