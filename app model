<?php
class Note {
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getNotesByUserId($user_id){
    $this->db->query("SELECT * FROM notes WHERE user_id = :uid AND deleted = 0 ORDER BY created_at DESC");
    $this->db->bind(':uid', $user_id);
    return $this->db->resultSet();
  }

  public function getNoteById($id){
    $this->db->query("SELECT * FROM notes WHERE id = :id");
    $this->db->bind(':id', $id);
    return $this->db->single();
  }

  public function addNote($data){
    $this->db->query("INSERT INTO notes (user_id, subject) VALUES (:uid, :sub)");
    $this->db->bind(':uid', $data['user_id']);
    $this->db->bind(':sub', $data['subject']);
    return $this->db->execute();
  }

  public function updateNote($data){
    $this->db->query("
      UPDATE notes SET subject = :sub, completed = :comp 
      WHERE id = :id AND user_id = :uid
    ");
    $this->db->bind([...]);
    return $this->db->execute();
  }

  public function deleteNote($id, $uid){
    $this->db->query("UPDATE notes SET deleted = 1 WHERE id = :id AND user_id = :uid");
    $this->db->bind(':id', $id);
    $this->db->bind(':uid', $uid);
    return $this->db->execute();
  }
}
