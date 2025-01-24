<?php

class Database
{
    private static $instance = null;
    private $connection;
    private function __construct()
    {
        $host = '193.203.166.123';
        $dbname = 'u498377835_php_gram';
        $username = 'u498377835_php_gram';
        $password = 'Humlis1234.';

        // Create the MySQL connection
        $this->connection = new mysqli($host, $username, $password, $dbname);

        // Check for connection errors
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Get the singleton instance
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Function to execute a query
    public function query($sql)
    {
        return $this->connection->query($sql);
    }

    // Escape strings to prevent SQL injection
    public function escape($string)
    {
        return $this->connection->real_escape_string($string);
    }

    // Close the connection
    public function close()
    {
        $this->connection->close();
    }
}

// Login function
function login($email, $password)
{
    $db = Database::getInstance();

    // Escape user input
    $username = $db->escape($email);
    $password = $db->escape($password);

    // Query the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user row as an associative array
        return $result->fetch_assoc();
    }

    // Return false if login fails
    return false;
}


function add_referal($userId, $referalUrl, $isActive)
{
    $db = Database::getInstance();

    // Query the database
    $sql = "insert into referal (user_id, referal_url, is_active) values ('$userId', '$referalUrl', '$isActive')";
    $db->query($sql);
}

?>