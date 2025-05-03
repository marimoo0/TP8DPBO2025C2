<?php
require_once 'config/connection.php';

class Enrollment
{

    private $conn;
    private $table_name = "enrollments";

    public $id;
    public $student_id;
    public $course_id;
    public $semester;
    public $grade;


    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT e.*, s.name as student_name, s.nim, c.code as course_code, c.name as course_name 
                 FROM " . $this->table_name . " e
                 JOIN students s ON e.student_id = s.id
                 JOIN courses c ON e.course_id = c.id";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getById($id)
    {
        $query = "SELECT e.*, s.name as student_name, s.nim, c.code as course_code, c.name as course_name 
                 FROM " . $this->table_name . " e
                 JOIN students s ON e.student_id = s.id
                 JOIN courses c ON e.course_id = c.id
                 WHERE e.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " (student_id, course_id, semester, grade) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("iiss", $this->student_id, $this->course_id, $this->semester, $this->grade);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET student_id = ?, course_id = ?, semester = ?, grade = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("iissi", $this->student_id, $this->course_id, $this->semester, $this->grade, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}