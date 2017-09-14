<?php include("doctype.php"); ?>

<body>

  <?php include("header.php"); ?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">สนทนาภาษาไทยกับครูนัยนา
                    <small>Webboard</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">หน้าหลัก</a>
                    </li>
                    <li>สนทนาภาษาไทยกับครูนัยนา</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
                <a href="new_question.php" class="btn btn-warning btn-xs pull-right"><b>+</b> ตั้งกระทู้ใหม่ </a>
          <br>
          <br>

        <?php
            include("connect.php");


        ?>

        <table class="table table-bordered table-striped">
          <tr>
            <th width="99"> <div align="center">หมายเลขคำถาม</div></th>
            <th width="458"> <div align="center">คำถาม</div></th>
            <th width="90"> <div align="center">ชื่อผู้ถาม</div></th>
            <th width="130"> <div align="center">วันที่ตั้งคำถาม</div></th>
          </tr>
        <?php
          $sql = "SELECT * FROM webboard";
          $query = mysqli_query($connect,$sql);
          while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
          {
        ?>
          <tr>
            <td><div align="center"><?php echo $result["QuestionID"]; ?></div></td>
            <td><a href="view.php?QuestionID=<?php echo $result["QuestionID"]; ?>"><?php echo $result["Question"]; ?></a></td>
            <td><?php echo $result["Name"]; ?></td>
            <td><div align="center"><?php echo $result["CreateDate"]; ?></div></td>
          </tr>
        <?php
          }
        ?>
        </table>






        <?php include("footer.php"); ?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
