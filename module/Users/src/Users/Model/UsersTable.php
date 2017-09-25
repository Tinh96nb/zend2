<?php
namespace Users\Model;
 
use Zend\Db\TableGateway\TableGateway;
 
class UsersTable {
     protected $tableGateway;
 
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
 
     public function fetchAll() {
         $resultSet = $this->tableGateway->select(); //dùng phương thức từ class TableGateWay
         return $resultSet;
     }
 
     public function getUsers($id) {
         $id  = (int) $id;
         $rowset = $this->tableGateway->select(array('id' => $id));// Get có điều kiện
         $row = $rowset->current(); // trả về đối tượng ResultSet lặp lại khi cần khi cần
         if (!$row) {
             throw new \Exception("Could not find row $id");
         }
         return $row;
     }
 
     public function saveUsers(Users $users) {
         $data = array(
             'name' => $user->name,
             'email'  => $user->email,
             'pass' => $user->email,
         );
 
         $id = (int) $user->id;
         if ($id == 0) {
             $this->tableGateway->insert($data);
         } else {
            if ($this->getUsers($id)) {
                 $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('User id does not exist');
             }
         }
     }
 
     public function deleteUsers($id) {
         $this->tableGateway->delete(array('id' => (int) $id));
     }
 }
