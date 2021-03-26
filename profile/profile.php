
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title></title>

        <!--icon -->
        <link rel="icon" href="" type="image/x-icon" />
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts Roboto -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
        <main>
            <!--Profile-->
           <section>
                <div class="x-container">
                    <div class="profile-header">
                        <div class="profile-img">
                            <img src="img/jordan.jpg" alt=""> 
                        </div>
                        <div class="profile-nav-info">
                            <h3 class="user-name">
                                <?php
                                    session_start();
                                    echo $_SESSION["firstname"] . " ". $_SESSION["lastname"]; 
                                ?>
                            </h3>
                            <div class="address">
                                <p class="state" style="color: #212237;">
                                    Level:
                                </p>
                                <span class="country" style="color: #2ecc71;">
                                    <?php
                                        echo $_SESSION["level"]; 
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="account">
                            <h3>Balance</h3>
                            <span>40,000</span>
                        </div>
                        
                        <div id="hamburger" onclick="openNav()">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="#" onclick="closeNav()">Home</a>
                                <a href="contact.html">Entrepreneur</a>
                                <a href="faq.html">Deposit</a>
                                <a href="faq.html">withdrawal</a>
                                <a href="faq.html">Support</a>
                            </div>
                        </div>
                    </div>
                </div>
           </section>  
           <section class="hide-account">
                <div>
                    <h3>Balance</h3>
                    <span>40,000</span>
                </div>
           </section>
            <!--Profile End-->       
           <!---Referals-->
           <section class="bio">
                <div class="my-row">
                    <div class="menu">
                        <span>Home</span><br><br>
                        <span>Entrepreneur</span><br><br>
                        <span>Deposit</span><br><br>
                        <span>withdrawal</span><br><br>
                        <span>Support</span><br>
                    </div>
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
                                                                $id = $_SESSION['email'];
                                                                $stmt =	$conn->prepare("SELECT * FROM users WHERE refBy = ?");
                                                                $stmt = bind_param("s", $id);
                                                                $stmt->execute;
                                                                $result = $stmt->get_result();
                                                                while ($row = $result->fetch_assoc()){} 
                                                            ?>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td><?php echo $row["firstname"]; ?></td>
                                                                        <td><?php echo $row["lastname"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>twg</td>
                                                                        <td>r32</td>
                                                                    </tr>    
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
                                                                <td>Mark</td>
                                                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                                                <td><a href="" class="btn btn-danger">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                                                <td><a href="" class="btn btn-danger">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                <th scope="row">3</th>
                                                                <td>Jacob</td>
                                                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                                                <td><a href="" class="btn btn-danger">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                <th scope="row">4</th>
                                                                <td>Jacob</td>
                                                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                                                <td><a href="" class="btn btn-danger">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                <th scope="row">4</th>
                                                                <td>Jacob</td>
                                                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                                                <td><a href="" class="btn btn-danger">Delete</a></td>
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