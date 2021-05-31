<?php include('profileheader.php'); ?>
            <!--Profile End-->       
           <!---Referals-->
           <section class="bio">
                <div class="my-row" style="height: auto; overflow: hidden;">
                     <?php include('head.php'); ?>
                    <div class="referals">
                        <div><h3>Referrals</h3></div><br>
                     
                        <div>
                            <div class="main-bd">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="accordion">
                                            <div class="content-box">
                                                <div class="label" style="color: #e40046;">Referrals</div>
                                                <div class="content">
                                                    <table class="table">
                                                <tbody>
<?php
include('../db.php');
$uploaduser = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$uploaduser'";
$run_query = mysqli_query($conn, $query);
while($res = mysqli_fetch_assoc($run_query)) {



$name = $res['firstname'];
$email = $res['email'];
$ref = $res['affcode'];
}

$count=1;
$stmt =$conn->prepare("SELECT * FROM users WHERE refBy=?");
$stmt->bind_param("s", $ref);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) { ?>       
                        <tr>
                            <td><?php echo $row["firstname"]; ?></td>
                            <td><?php echo $row["lastname"]; ?></td>
                        </tr>
<?php $count++; } ?>
  
            </tbody>
        </table>      
    </div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="accordion">
<div class="content-box">
    <div class="label" style="color: #e40046;">Transaction history</div>
    <div class="content">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>....</td>
                    <td><a href="" class="btn btn-primary">....</a></td>
                    <td><a href="" class="btn btn-danger">....</a></td>
                    </tr>
                    
                </tbody>
            </table>   
        </div>     
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
</div>
</section>
<!---Referals End-->
</main>
<!--- Script Source Files -->
        <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
        <script src="js/profile.js"></script>
        <!--- End of Script Source Files -->
    </body>
</html>