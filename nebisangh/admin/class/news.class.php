<?php
 class news extends common{
 	public $id,$title,$category,$short_desc,$description,$image,$created_by,$created_at,$modified_by,$modified_at,$status;

 	public function selectnews()
 	{
 		$sql = "select * from tbl_news";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectnewsbyid()
 	{
 		$sql = "select * from tbl_news where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertnews()
 	{

 		$sql = "insert into tbl_news(title,category_name,short_desc,long_desc,image,created_by,created_at,status)values('$this->title','$this->category','$this->short_desc','$this->description','$this->image','$this->created_by','$this->created_at','$this->status') ";
 		return $this->insert($sql);
 	}

 	public function insertwithoutimg()
 	{
 		 $sql = "insert into tbl_news(title,category_name,short_desc,long_desc,created_by,created_at,status)values('$this->title','$this->category','$this->short_desc','$this->description','$this->created_by','$this->created_at','$this->status') ";
 		return $this->insert($sql);
 	}

 	public function deletenews()
 	{
 		$sql = "delete from tbl_news where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updatenews()
 	{

 		$date = date('Y-m-d H:i:s');
 		if(!empty($this->image))
 		{
 			$sql = "update tbl_news set title = '$this->title',category_name = '$this->category',short_desc = '$this->short_desc',long_desc = '$this->description',image = '$this->image',modified_by = '$this->modified_by',modified_at = '$date',status = '$this->status' where id='$this->id'";
 		}
	 	else	
	 	{
	 		$sql = "update tbl_news set title = '$this->title',category_name = '$this->category',short_desc = '$this->short_desc',long_desc= '$this->description',modified_by = '$this->modified_by',modified_at = '$date',status = '$this->status' where id='$this->id'";
	 	}
	 	return $this->update($sql);
	 }
	 function selectcommentbyid()
	 {
	 	$sql="select * from tbl_comments where news_id='$this->id'";

	 	return $this->select($sql);
	 }
	 function deletecomments()
	 {
	 	$sql= "delete from tbl_comments where id='$this->id'";
	 	return $this->delete($sql);
	 }

}
?>