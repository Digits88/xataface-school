<?php
class tables_dashboard {
    /*
    function getUser(){

    	return null !== Dataface_AuthenticationTool::getInstance()->getLoggedInUser();
    }
*/
    
    function getPermissions(&$record){
        if ( getUser() ){
            return Dataface_PermissionsTool::ALL();
        }
        return null;
    }

    
}
?>