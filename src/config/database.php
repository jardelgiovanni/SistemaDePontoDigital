<?php

class Database
{
    // Faz a conexão com o banco
    public static function getConnection()
    {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host_mysql'], $env['username_mysql'], $env['password_mysql'], $env['database_mysql']);

        if ($conn->connect_error) {
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    // Pega o resultado através do sql
    public static function getResultFromQuery($sql)
    {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();

        return $result ;
    }
}