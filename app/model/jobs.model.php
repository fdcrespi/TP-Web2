<?php

    class JobsModel{
        private $db;

        function __construct(){
            $this->db = $this->connect();
        }

        function connect(){
            $database = new PDO('mysql:host=localhost;'.'dbname=db_jobs;charset=utf8', 'root', '');
            return $database;
        }

        function getAll(){
            $query = $this->db->prepare('SELECT * from employee');
            $query->execute();
            $workers = $query->fetchAll(PDO::FETCH_OBJ);
            return $workers;
        }

    }