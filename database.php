<?php
class Database
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  protected  $connection;

  function __construct()
  {

    $this->connection = mysqli_connect($this->host, $this->user, $this->password);
    if (mysqli_connect_errno()) {
      echo '<script>alert("Error in the Database Conncetion!");</script>';
    }

  }
  function __destruct()
  {
    mysqli_close($this->connection);
    
  }
}
