<?php

require_once "./config/database.php";

class Author 
{
    private $id, $name;

    public function getid()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public static function all ()
    {
            global $pdo;

            $query = $pdo->query("SELECT * FROM Authors");

            return $query->fetchAll(PDO::FETCH_CLASS, 'Author');
    }

    public static function store(string $name)
        {
            try {
                global $pdo;

                $query = "INSERT INTO authors (name) VALUES ('$name')";

                $pdo->exec($query);

                $_SESSION['success'] = "Menambah data Author success!";

               return header('Location: /author');
        }catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
}