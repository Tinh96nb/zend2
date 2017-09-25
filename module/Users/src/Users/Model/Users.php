<?php
namespace Users\Model;

class Users{
     public $id;
     public $name;
     public $email;
     public $password;

	/* – Đối tượng thực thể Users là một class PHP đơn
	giản. Để có thể làm việc với Zend\Db’s TableGateway
	class, chúng ta cần phải implement phương thức exchangeArray().
	– Phương thức này sẽ chép dữ liệu từ mảng tới các
	thuộc tính cùa thực thể. */
	public function exchangeArray($data) {
         $this->id     = (!empty($data['id'])) ? $data['id'] : null;
         $this->name = (!empty($data['name'])) ? $data['name'] : null;
         $this->email  = (!empty($data['email'])) ? $data['email'] : null;
         $this->pass = (!empty($data['pass'])) ? $data['pass'] : null;
     }
}