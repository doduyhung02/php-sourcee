<?php
class Home{
    function displayIndex()
    {
        $this->view("master",["Page"=>"home"]);
    }
}
?>