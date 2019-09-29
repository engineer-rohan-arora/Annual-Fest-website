if (isset($_POST['register1'])) {
  # code...


$query = mysqli_query($con,$sql); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('Name', 'CollageName', 'Course', 'Branch', 'Year','Mobile','Email','Event','Address','gender','UID');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['Name'], $row['Course'], $row['Branch'], $row['Year'], $row['Mobile'], $row['Email'],$row['Event'],$row['Address'],$row['gender'],$row['UID']);
        fputcsv($f, $lineData, $delimiter);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
} 
