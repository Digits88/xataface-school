<?php
class actions_dashboard {
    function handle(&$params){
        $homework = df_get_records_array('homework', array());
        df_display(array('homework'=>$homework), 'dashboard.html');
    }
}

?>