<?php 
function loadWorkouts() {
    $data = file_get_contents(__DIR__);
    return json_decode($data , true);
}
?>