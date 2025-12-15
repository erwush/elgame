<?php
declare(strict_types=1);

class Genre
{
    private \mysqli $connection;
    private string $table = "tb_genre";

    public string $name = "";

    public function __construct(\mysqli $db)
    {
        $this->connection = $db;
    }

    public function read(): \mysqli_stmt|false
    {
        try {
            $query = "SELECT * FROM {$this->table}";
            $stmt  = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function read_one(int $id): \mysqli_stmt|false
    {
        try {
            $query = "SELECT * FROM {$this->table} WHERE id = ?";
            $stmt  = $this->connection->prepare($query);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function create(): bool
    {
        try {
            $query = "INSERT INTO {$this->table} (name) VALUES (?)";
            $stmt  = $this->connection->prepare($query);

            $this->name = htmlspecialchars(strip_tags($this->name));

            $stmt->bind_param("s", $this->name);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function update(int $id): bool
    {
        try {
            $query = "UPDATE {$this->table} SET name = ? WHERE id = ?";
            $stmt  = $this->connection->prepare($query);

            $this->name = htmlspecialchars(strip_tags($this->name));

            $stmt->bind_param("si", $this->name, $id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function delete(int $id): bool
    {
        try {
            $query = "DELETE FROM {$this->table} WHERE id = ?";
            $stmt  = $this->connection->prepare($query);
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
