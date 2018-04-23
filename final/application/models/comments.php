<?php
class Comment extends Model{

public function getComment($pID) {
$sql = 'SELECT c.commentID, c.commentText, c.date, u.first_name as f_name, u.last_name as l_name, p.pID from comments c
INNER JOIN posts p on posts.pID = c.postID,
INNER JOIN user u on u.uID = c.uID
WHERE p.pID = ?';

$results = $this->db->getrow($sql, array($pID));

$comment = $results;

return $comment;

}

public function addComment($data){

$sql='INSERT INTO comments (commentText, date, postID, uID) VALUES (?,?,?,?)';
$this->db->execute($sql,$data);
$message = 'Comment Saved.';
return $message;

}

}

 

