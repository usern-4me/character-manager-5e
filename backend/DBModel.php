<?php 

class DBModel
{
    protected string $host;
    protected string $dbname;
    protected string $username;
    protected string $password;
    public ?mysqli $mysqli = null; 

    public function __construct()
    {
        $configPath = __DIR__ . '/config.json';

        if (!file_exists($configPath)) {
            throw new Exception("Config file not found at $configPath");
        }

        $configContent = file_get_contents($configPath);
        $config = json_decode($configContent, true);

        if ($config === null) {
            throw new Exception("Invalid JSON config file");
        }

        $this->host = $config['host'] ?? 'localhost';
        $this->dbname = $config['dbname'] ?? '';
        $this->username = $config['username'] ?? '';
        $this->password = $config['password'] ?? '';
    }

    public function connect()
    {
        $this->mysqli = null;
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        
        if ($this->mysqli->connect_error) {
            throw new Exception("Connection Error: " . $this->mysqli->connect_error);
        }
    }

    public function closeConnect()
    {
        if ($this->mysqli) {
            $this->mysqli->close();
            $this->mysqli = null;
        }
    }


}
