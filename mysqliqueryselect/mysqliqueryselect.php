function selectAllOrOne($table='', $id='') {
    
    // Global connection
    global $connection;
    
    
    //Check if there is any id or not    
    if(empty($id) || $id = ''){
    
    
    //Do the query    
    $query  = "SELECT * FROM '{$table}' ";
    //Execute the query
    $result = mysqli_query($connection, $query);
    
    
    
    //Return result
    return $result;
    
    //Check if there is a id  
    } else if(!empty($id) || !$id = '')
    
    //Do the query    
    $query = "SELECT * FROM '{$table}' WHERE content_id= {$id}";
    
    //Execute the query
    $result = mysqli_query($connection, $query);
    
    //Return result
    return $result;
            
        
    }