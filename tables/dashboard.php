<?php
function getPermissions($record){
    $user = Dataface_AuthenticationTool::getInstance()->getLoggedInUser();
    
    // If user is an admin defer to the application delegate class for 
    // permissions
    if ( $user and $user->val('role') == 'ADMIN' ){
        return null;
    } elseif ($user and $user->val('role') == 'REGULAR') {
        return Dataface_PermissionsTool::getRolePermissions('REGULAR');
    } 
    if ( $user ){
        // User is logged in
        return Dataface_PermissionsTool::READ_ONLY();
    } 
    // Defer to the application delegate class for all other users
    return null;
}
?>