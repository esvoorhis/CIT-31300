<?php
class Users extends Model{
    public function __construct($role)
    {
        parent::__construct($role);
    }
    public function getUser($uID){
        $sql = 'select uID, first_name, last_name, email, password from users where uID =?';
        $results = $this->db->getrow($sql, array($uID));
        $user = $results;
        return $user;
    }

    public function getAllUsers($limit = 0){
        if($limit > 0)
        {
            $numusers = 'LIMIT'.$limit;
        }
        $sql = 'select uID, first_name, last_name, email, password from users'.$numusers;
        $results = $this->db->execute($sql);
        while ($row=$results->fetchrow())
        {
            $users[] = $row;
        }
        return $users;
    }
    public function  addUser($data)
    {
        $sql = 'insert into users(email, password, first_name, last_name, ) values (?,?)';
        $this->db->execute($sql, $data);
        $message = 'User added.';
        return $message;
    }

}