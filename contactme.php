< ?php
      include _once( "config.php");
        $ visitorsName = $_POST['visitorsName'];
        $ visitorsEmail = $_POST['visitorsEmail'];
        $ visitorsCompany = $_POST['visitorsCompany'];
        $ visitorsMessege = $_POST['visitorsMessege'];

        $query = mysqli_query($conn, "INSERT INTO tbl_sample(visitorName, visitorEmail,
        visitorsCompany, visitorsMessage)
        VALUES('". $VisitorsName . "','" . $VisitorsMessege . "');"
        );
      if($query >= 1){
                      echo "inserted";
                    }else{
                    echo "Not inserted"...! ";
                    die error: " . $conn->error);

}