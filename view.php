<?php
 include("connect.php");

if(isset($_GET["Action"]) == "Save")
{
	//*** Insert Reply ***//
	$strSQL = "INSERT INTO reply ";
	$strSQL .="(QuestionID,CreateDate,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetailss"]."','".$_POST["txtName"]."') ";
	$objQuery = mysqli_query($connect,$strSQL);

	//*** Update Reply ***//
	$strSQL = "UPDATE webboard ";
	$strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
	$objQuery = mysqli_query($connect,$strSQL);
}
?>
﻿<?php include("doctype.php"); ?>

<body>

  <?php include("header.php"); ?>
  <?php
     $num = $_GET["QuestionID"];
  ?>

  <?php

      $sqls = "SELECT * FROM webboard WHERE QuestionID = '$num'";
      $queryz = mysqli_query($connect,$sqls);
      $resultz=mysqli_fetch_array($queryz,MYSQLI_ASSOC);
  ?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">สนทนาภาษาไทยกับครูนัยนา
                    <small>Webboard</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">หน้าหลัก</a>
                    </li>
                    <li><a href="webboard.php">สนทนาภาษาไทยกับครูนัยนา</a></li>
                    <li><?php echo $resultz["Question"]; ?></a></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <?php
  //*** Select Question ***//
  $strSQL = "SELECT * FROM webboard  WHERE QuestionID = '".$num."' ";
  $objQuery = mysqli_query($connect,$strSQL) or die ("Error Query [".$strSQL."]");
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

  //*** Update View ***//
  $strSQL = "UPDATE webboard ";
  $strSQL .="SET View = View + 1 WHERE QuestionID = '".$num."' ";
  $objQuery = mysqli_query($connect,$strSQL);
  ?>
  <table class="table table-bordered table-striped">
    <tr>
      <td colspan="2"><center><h1><?php echo $objResult["Question"];?></h1></center></td>
    </tr>
    <tr>
      <td height="53" colspan="2"><?php echo nl2br($objResult["Details"]);?></td>
    </tr>
    <tr>
      <td>โดย : <?php echo $objResult["Name"];?> (วันที่ : <?php echo $objResult["CreateDate"];?>)</td>

    </tr>
  </table>
  <br>
  <br>
  <?php
  $intRows = 0;
  $strSQL2 = "SELECT * FROM reply  WHERE QuestionID = '".$num."' ";
  $objQuery2 = mysqli_query($connect,$strSQL2) or die ("Error Query [".$strSQL."]");
  while($objResult2 =mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
  {
  	$intRows++;
  ?> No : <?php echo $intRows;?>
  <table class="table table-bordered table-striped">
    <tr>
      <td height="53" colspan="2"><?php echo nl2br($objResult2["Details"]);?></td>
    </tr>
    <tr>
      <td width="397">Name :
          <?php echo $objResult2["Name"];?>      </td>
      <td width="253">Create Date :
      <?php echo $objResult2["CreateDate"];?></td>
    </tr>
  </table><br>
  <?php
  }
  ?>
  <br>
  <a href="Webboard.php">Back to Webboard</a> <br>
  <br>
  <form action="view.php?QuestionID=<?php echo $num;?>&Action=Save" method="post" name="frmMain" id="frmMain">
    <table class="table table-bordered table-striped">
      <tr>
        <td width="78">Details</td>
        <td><textarea name="txtDetailss" cols="50" rows="5" id="txtDetails"></textarea></td>
        <script>
              // Replace the <textarea id="editor1"> with a CKEditor
              // instance, using default configuration.
              CKEDITOR.replace( 'txtDetailss' );
        </script>
      </tr>
      <tr>
        <td width="78">Name</td>
        <td width="647"><input name="txtName" type="text" id="txtName" value="" size="50"></td>
      </tr>
    </table>

    <input name="btnSave" type="submit" id="btnSave" value="Submit">
  </form>




        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
