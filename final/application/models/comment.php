<?php
class Comment extends Model{

    public function getComment($pID) {
        $sql = 'SELECT c.commentText, c.date, u.first_name as f_name, u.last_name as l_name
        from  c
INNER JOIN posts on posts.pID = comments.postID,
INNER JOIN user u on user.uID = comments.uID
WHERE post.pID = ?';

        $results = $this->db->getrow($sql, array($pID));
        $comment = $results;
        return $comment;

    }

    public function addComment($data){

        $sql='INSERT INTO comments (commentText,date,uID, postID) VALUES (?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Comment Saved.';
        return $message;

    }

    public function delete($data){
        $sql='delete from comments where $comments.commentID = ?';
    }

}