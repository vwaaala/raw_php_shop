<?php

class DBcontroller
{
    // mysql credentials
    protected string $host = 'localhost';
    protected string $user = 'root';
    protected string $password = '';
    protected string $database = 'raw-shop';

    // connection property
    public $con = null;

    // call construct
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_errno) {
            echo "Fail" . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }
    // for mysqli closing connection
    protected function closeConnection(){
            if($this->con != null){
                $this->con->close();
                $this->con = null;
            }
    }
}