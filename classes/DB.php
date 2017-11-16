<?php
class Database{
    private $_host = '8.8.8.8';
    private $_user = 'blah';
    private $_password = 'blah';
    private $_dbname = 'googledb';

    private $_datahandler;
    private $_error;
    private $_statement;

    public function __construct()
    {
        // DSN
        $dsn = 'mysql:host='.$this->_host.';dbname='.$this->dbname;

        // Opcoes
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        // Instancia PDO
        try {
            $this->_datahandler = new PDO($dsn,$this->_user, $this->_password);
        } catch(PDOException $e){
            $this->_error = $e->getMessage();
        }
    }
}

?>