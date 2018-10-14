<?php
    require_once 'class/common.class.php';
    require_once 'class/category.class.php';
    require_once 'class/news.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    

    $news = new news;
    if(isset($_GET['id']))
    {           
        $news->id = $_GET['id'];
                if(isset($_POST['submit']))
                {
                    $title= $_POST['title'];
                    $short= $_POST['shortdesc'];
                    $description= $_POST['description'];
                    $category = $_POST['category'];
                    $modified_by= $_SESSION['username'];
                    $news->title = $title;
                    $news->short_desc = $short;
                    $news->description = $description;
                    $news->modified_by = $modified_by;
                    $news->status = $_POST['status'];
                    $news->category = $category;
                    if (!empty($_FILES['image'])) {
                         $image =  $_FILES['image']['name'];
                         move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$image);
                         $news->image = $image;
                    }
                    $ask = $news->updatenews();
                    if($ask=="Duplicate")
                    {
                        echo "<script>alert('Duplicate Entry')</script>";
                    }
                    else if($ask)
                    {
                        echo "<script>alert('Updated Sucessfully')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Update Failed')</script>";
                    }
                }
    }
    $data = $news->selectnewsbyid();
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                    <li class="active">Update News</li>
                </ol>
            </div><!--/.row-->
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update News</h1>
                </div>
            </div><!--/.row-->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">News Details</div>
                        <div class="panel-body">
                            <form class="form-horizontal row-border" role="form" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" value="<?php echo $data[0]->title; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Category</label>
                                    <div class="col-md-10">
                                        <select class="form-control input-lg" name="category">
                                  <?php
                                    $category=new category;
                                    $datas = $category->listcategory();
                                    foreach ($datas as  $value) {
                                    ?>
                                             <option><?php echo $value->category_name; ?> </option>
                                     <?php } ?>
                            </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Image</label>
                                    <div class="col-md-10">
                                        <input  type="file" name="image" value="<?php echo $data[0]->image; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Short Desc</label>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control" name="shortdesc"><?php echo $data[0]->short_desc; ?></textarea></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Description</label>
                                    <div class="col-md-10">
                                    <textarea class="form-control" name="description" rows="20" value="<?php echo $data[0]->long_desc; ?>">
                                    <?php echo $data[0]->long_desc; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group">
                                    
                                    <label class=" col-md-2 control-label" style="font-size: 1.3em;margin-top: 29px;">Status</label>
                                
                                <div class="col-md-10">
                                    </div>
                                     <?php
                                    if($data[0]->status==1)
                                    { ?>
                                <div class="col-md-2 col-sm-3" style="width: 35%;margin-top: 2em;">
                                    <div class="input-group"><span class="input-group-addon">
                                        <input type="radio" name="status" id="optionsRadiosX" value="1" checked="">
                                        </span>
                                        <input type="text" style="color:black;" class="form-control btn-success" value="Active" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3" style="width: 35%;margin-top: 2em;">
                                    <div class="input-group"><span class="input-group-addon">
                                        <input type="radio" name="status" id="optionsRadiosY" value="0">
                                        </span>
                                        <input type="text" style="color:black;" class="form-control btn-danger" value="Inactive" readonly="">
                                    </div>
                                </div>
                                <?php 
                                }
                                else { ?>
                                <div class="col-md-2 col-sm-3" style="width: 35%;margin-top: 2em;">
                                    <div class="input-group"><span class="input-group-addon">
                                        <input type="radio" name="status" id="optionsRadiosX" value="1">
                                        </span>
                                        <input type="text" style="color:black;" class="form-control btn-success" value="Active" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3" style="width: 35%;margin-top: 2em;">
                                    <div class="input-group"><span class="input-group-addon">
                                        <input type="radio" name="status" id="optionsRadiosY" value="0" checked="">
                                        </span>
                                        <input type="text" style="color:black;" class="form-control btn-danger" value="Inactive" readonly="">
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row" style="margin-top: 2em;">
                    <div class="col-md-2 col-sm-2"> 
                                </div>
                        <div class="col-sm-9">
                    <div class="panel panel-default">
                            <button type="submit" class="btn btn-primary btn-lg" title="" name="submit" style="width: 7em;height: 2.5em;font-size: 18px;">Submit</button>
                        </div>
                    </div>
                </div>
    

                        </div>
                    </div>
                </div>
            </div><!--/.row-->
            <div class="col-sm-12">
                <p class="back-link">Powered By<a href="#"> Medialoot</a></p>
            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!--/.main-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/custom.js"></script>
        
    </body>
</html>
