<?php
include("connect.php");

if(isset($_GET["Action"]) == "Save")
{
	//*** Insert Question ***//
	$strSQL = "INSERT INTO webboard ";
	$strSQL .="(CreateDate,Question,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".date("Y-m-d H:i:s")."','".$_POST["txtQuestion"]."','".$_POST["txtDetailss"]."','".$_POST["txtName"]."') ";
	$objQuery = mysqli_query($connect,$strSQL) or die(mysqli_error($connect));

   header("location:webboard.php");
}
?>
<?php include("doctype.php"); ?>
<body>

  <?php include("header.php"); ?>
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">สนทนาภาษาไทยกับครูนัยนา
                <small>Webboard</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">หน้าหลัก</a></li>
                <li><a href="webboard.php">สนทนาภาษาไทยกับครูนัยนา</a></li>
                <li>ตั้งกระทู้ใหม่</li>
            </ol>
        </div>
    </div>
    <form action="new_question.php?Action=Save" method="post" name="frmMain" id="frmMain">
      <table class="table table-bordered table-striped">
        <tr>
          <td>คำถาม</td>
          <td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="70"></td>
        </tr>
        <tr>
          <td width="78">รายละเอียดคำาถม</td>
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
  </div>
</body>
<?php
mysqli_close($connect);
include("footer.php");
?>
