<?php
class View {
    function load( $folder,$file_name, $data = null )
    {
        if( is_array($data) ) {
            extract($data);
        }
        //instantiate user
        $u = new Users();
        include 'views/'.$folder.'/' . $file_name.'.php';
    }
}