

<?php
 class category extends common{
 	
 	public $id,$name,$created_by,$created_at,$modified_by,$modified_at,$status;

 	public function selectcategorybyid()
		{
			$sql = "select * from tbl_category where id = '$this->id'";
			return $this->select($sql);
		}

 	public function addcategory()
 	{
 		$sql = "insert into tbl_category(category_name,created_by,created_at,status)values('$this->name','$this->created_by','$this->created_at','$this->status') ";
 		return $this->insert($sql);
 	}

 	public function listcategory()
 	{
 		$sql = "select * from tbl_category";
 		return $this->select($sql);
 	}

 	public function updatecategory()
 	{
 		$date = date('Y-m-d H:i:s');
 		$sql = "update tbl_category set category_name = '$this->name',modified_by = '$this->modified_by',modifed_at = '$date',status ='$this->status' where id ='$this->id' ";
 		return $this->update($sql);
 	}

 	public function deletecategory()
 	{
 		$sql = "delete from tbl_category where id = '$this->id' ";
 		
 		return $this->delete($sql);
 	}

 }

 ?>