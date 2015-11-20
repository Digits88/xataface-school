<?php
require_once 'snippets/functions.inc.php';
/**
 * A delegate class for the entire application to handle custom handling of 
 * some functions such as permissions and preferences.
 */
class conf_ApplicationDelegate {
    /**
     * Returns permissions array.  This method is called every time an action is 
     * performed to make sure that the user has permission to perform the action.
     * @param record A Dataface_Record object (may be null) against which we check
     *               permissions.
     * @see Dataface_PermissionsTool
     * @see Dataface_AuthenticationTool
     */


function getPermissions($record){


    $user = Dataface_AuthenticationTool::getInstance()->getLoggedInUser();
    if ( $user and $user->val('role') == 'ADMIN' ){
        return Dataface_PermissionsTool::getRolePermissions('ADMIN');
    } else {
        return Dataface_PermissionsTool::NO_ACCESS();
    }
}

/*	 
     function getPermissions(Dataface_Record $record = null){
      //return Dataface_PermissionsTool::getRolePermissions('USER');
      //$auth =& Dataface_AuthenticationTool::getInstance();
    $user =& Dataface_AuthenticationTool::getInstance()->getLoggedInUser();
    
    if ( $user and $user->val('role') == 'ADMIN'){
        $role = $user->val('role');
        return Dataface_PermissionsTool::getRolePermissions($role);
    }
    return Dataface_PermissionsTool::NO_ACCESS();
}
*/      
function getPreferences(){
        $app =& Dataface_Application::getInstance();
        $auth =& Dataface_AuthenticationTool::getInstance();
        $user =& $auth->getLoggedInUser();
        if ( $user and $user->val('role') ){
          return array();
        
        } else {
          return array(
            'show_result_stats'=>0,
            'show_jump_menu'=>0,
            'show_result_controller'=>0,
            'show_table_tabs'=>0,
            'show_actions_menu'=>0,
            'show_tables_menu'=>0,
            'show_search'=>0,
            'show_record_actions'=>0,
            'show_recent_records_menu'=>0,
            'show_record_tabs'=>0,
            'show_record_tree'=>0,
            'show_bread_crumbs'=>0);
        
        }
        
      }      
      
  function beforeHandleRequest(){
        
        $app =& Dataface_Application::getInstance();
    $query =& $app->getQuery();
    if ( $query['-table'] == 'dashboard' and ($query['-action'] == 'browse' or $query['-action'] == 'list') ){
        $query['-action'] = 'dashboard';
    }
        
        
    }

 }     
 
?>