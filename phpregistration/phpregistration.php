function register_user($username, $email, $password){

global $connection;

    $username = mysqli_real_escape_string($connection, $username);
    $email    = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12));
        
        
    $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
    $query .= "VALUES('{$username}','{$email}', '{$password}', 'subscriber' )";
    $register_user_query = mysqli_query($connection, $query);

    confirmQuery($register_user_query);

    



}