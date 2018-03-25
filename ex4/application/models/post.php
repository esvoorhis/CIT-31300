<?php
class Post extends Model{
	
	function getPost($pID){
		
		$sql =  'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryid = p.categoryid
		INNER JOIN users u on u.uid = p.uid
		WHERE p.pID = ?
		';
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
		}
		
	public function getAllPosts($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryid = p.categoryid
		INNER JOIN users u on u.uid = p.uid'.$numposts;

        // perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;

    }
	
	public function addPost($data){
		
		$sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,1)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}

	public function updatePost($data){
	    $sql = 'UPDATE post SET title = ?, content = ?, category = ?, date = ? where pID = ?';
	    $this->db->execute($sql, $data);
	    $message = 'Post Updated';
	    return $message;
    }
	
	
}