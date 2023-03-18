<?php

$optionQuery = query("SELECT * FROM options");



//   $departmentRow = array_filter($optionQuery , function($row){ return $row["optionType"] == "Department";});
if($optionQuery -> num_rows > 0){
    // $optionQuery = $optionQuery -> fetch_all(MYSQLI_ASSOC)
    // $dept = array_filter($optionQuery, function($row){return $row["optionType"] == "Department";});
    $optionQuery = $optionQuery->fetch_all(MYSQLI_ASSOC);
}
optionQuery("Department");
function optionQuery($optionType){
    $sql = "SELECT * FROM options";
    $optionQuery = query($sql);
    // $optionQuery = $optionQuery -> fetch_all(MYSQLI_ASSOC);
    $optionType1 = array_filter($optionQuery, function($row) use($optionType){
        return $row["optionType"] == $optionType;
    });
    print_r($optionType1);
}

?>