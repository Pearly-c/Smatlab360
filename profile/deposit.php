<?php include('profileheader.php'); ?>
            <!--Profile End-->       
           <!---Referals-->
           <section class="bio">
                <div class="my-row" style="height: auto; overflow: hidden;">
                    <?php include('head.php'); ?>
                    <div class="referals">
                        <div><h3>Subscription</h3></div><br>
                     
                        <div>
                            <div class="main-bd" style="display: block;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="payment.php" method="post">
                                            <div style="text-align: center;">
                                                <p><select name="amount" placeholder="Enter Amount" style="width: 60%; padding: 5px 0px 5px 15px; color: black; outline: none;"><option value="6000">6,000</option> </select></p>
                                                <input type="Submit" name="submit" class="btn" style="background-color: #212237; color:white; ">
                                            </div>
                                        </form>
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