<?php

class bookDB {
    
    public static function getUserByEmail($email_address) {
        $db = Database::getDB();

        $query = 'SELECT * from users
                  WHERE email_address = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(":email", $email_address);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
       
          $user = new user (
          $row['first_name'],
          $row['last_name'],
          $row['email_address'],
          $row['password']);

          return $user;      
    }
    
    public static function addUser($first_name, $last_name, $email_address, $password) {
        $db = Database::getDB();

        $query = 'INSERT INTO users (first_name, last_name, email_address, password)
              VALUES (:first_name, :last_name, :email_address, :password_hash)';
        $statement = $db->prepare($query);        
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->bindValue(':email_address', $email_address);
        $statement->bindValue(':password_hash', $password);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function getPassword($email) {
        $db = Database::getDB();

        $query = 'SELECT password from users
                WHERE email_address = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(":email", $email);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        
        return $row['password'];
    }
    
    
}//end bookdb