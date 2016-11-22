<?php
function stmt_bind_assoc (&$stmt, &$out) {
    //use instead of binf for * selection
    //$resultrow = array();
    //stmt_bind_assoc($stmt, $resultrow);

    $data = mysqli_stmt_result_metadata($stmt);
    $fields = array();
    $out = array();

    $fields[0] = $stmt;
    $count = 1;

    while($field = mysqli_fetch_field($data)) {
        $fields[$count] = &$out[$field->name];
        $count++;
    }
    call_user_func_array(mysqli_stmt_bind_result, $fields);
}
?>