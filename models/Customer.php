<?php
  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addCustomer($data) {
      // Prepare Query
      $this->db->query('INSERT INTO customers (id, txtFirstName, txtAmount, email) VALUES(:id, :txtFirstName, :txtAmount, :email)');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':txtFirstName', $data['txtFirstName']);
      $this->db->bind(':txtAmount', $data['txtAmount']);
      $this->db->bind(':email', $data['email']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getCustomers() {
      $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }