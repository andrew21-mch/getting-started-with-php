<?php
    //Map lines of the string returned by file function to $rows array.
    $rows   = array_map('str_getcsv', file('file.csv'));
    //Get the first row that is the HEADER row.
    $header_row = array_shift($rows);
    //This array holds the final response.
    $employee_csv    = array();
    foreach($rows as $row) {
        if(!empty($row)){
            $employee_csv[] = array_combine($header_row, $row);
        }
    }
 
    print_r($employee_csv)
?>