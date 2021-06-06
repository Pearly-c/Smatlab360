<?php include('profileheader.php'); ?>
            <!--Profile End-->       
           <!---Referals-->
              <?php        
include('../db.php');

$id = $_SESSION['username'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=?"); 
$stmt->bind_param("i", $id);
$stmt->execute();
$row = $stmt->get_result();
$result= $row->fetch_assoc();
?> 
           <section class="bio ">
                <div class="my-row" style="height: auto; overflow: hidden;">
                    <?php include('head.php'); ?>
                    <div class="referals">
                        <div><h3>PROFILE</h3></div><br>
                        <!-- Tabs navs -->
                        <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a
                                class="nav-link active"
                                id="ex3-tab-1"
                                data-mdb-toggle="tab"
                                href="#ex3-tabs-1"
                                role="tab"
                                aria-controls="ex3-tabs-1"
                                aria-selected="true"
                                >Edit Personal information</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                class="nav-link"
                                id="ex3-tab-2"
                                data-mdb-toggle="tab"
                                href="#ex3-tabs-2"
                                 role="tab"
                                aria-controls="ex3-tabs-2"
                                aria-selected="false"
                                >Bank details</a
                                >
                            </li>
                        </ul>
                        <!-- Tabs navs -->

                        <!-- Tabs content -->
                        <div class="tab-content" id="ex2-content" >
                            <div
                                class="tab-pane fade show active"
                                id="ex3-tabs-1"
                                role="tabpanel"
                                aria-labelledby="ex3-tab-1"
                            >
                                <form action="updateprof.php" method="post" class="personal-info" enctype="multipart/form-data">
                                    <!-- id -->
                                    <div class="form-outline mb-4">
                                        <input type="hidden" name="id" value="<?php echo $result['id']; ?>" id="__firstName" class="form-control" />
                                        
                                    </div>
                                    <!-- First-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" name="first" value="<?php echo $result['firstname']; ?>" id="__firstName" class="form-control" />
                                        <label class="form-label" for="__firstName">First name</label>
                                    </div>

                                    <!-- Last-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" name="lname" value="<?php echo $result['lastname']; ?>" id="__lastName" class="form-control" />
                                        <label class="form-label" for="__lastName">Last name</label>
                                    </div>
                                    <!-- Image -->
                                    <div class="form-outline mb-4">
                                        <input type="file" name="image" value="<?php echo $result['lastname']; ?>" id="__lastName" class="form-control" />
                                    </div>
                                  
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="number" name="phone" value="<?php echo $result['phone']; ?>" id="__phone" class="form-control" />
                                        <label class="form-label" for="__phone">Phone</label>
                                    </div>
                                    
                                    <!-- Date of birth input -->
                                    <div class="form-outline mb-4">
                                        <input type="date" name="dob" value="<?php echo $result['dob']; ?>" id="__birthDate" class="form-control" />
                                        <label class="form-label" for="__birthDate">Date of birth</label>
                                    </div>

                                    <!-- Sex input -->
                                    <div class="form-outline mb-4">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="sex"
                                            id="__male"
                                        />
                                        <label class="form-check-label" for="__male"> Male </label>
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="sex"
                                            id="__female"
                                        />
                                        <label class="form-check-label" for="__female"> Female</label>
                                    </div>

                                    <!-- Submit button -->
                                    <div style="text-align: center;"><button type="submit" name="update" class="btn btn-primary">Update</button></div>
                                </form>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="ex3-tabs-2"
                                role="tabpanel"
                                aria-labelledby="ex3-tab-2"
                            >
                            <form action="updateprof.php" method="POST" class="personal-info">
                                    <!-- Bank-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" name="bank" value="<?php echo $result['bank']; ?>" id="__bankName" class="form-control" />
                                        <label class="form-label" for="__bankName">Name of Bank</label>
                                    </div>

                                    <!-- Account-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" name="accname" value="<?php echo $result['accname']; ?>" id="__accountName" class="form-control" />
                                        <label class="form-label" for="__accountName">Account name</label>
                                    </div>
                                    
                                    <!-- Account-number input -->
                                    <div class="form-outline mb-4">
                                        <input type="number" name="accnumb" value="<?php echo $result['accnum']; ?>" name="" id="__accountNo" class="form-control" />
                                        <label class="form-label" for="__accountNo">Account Number</label>
                                    </div>

                                    <!-- sort-code input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" name="sort" value="<?php echo $result['sort']; ?>" id="__sortCode" class="form-control" placeholder="Optional" />
                                        <label class="form-label" for="__sortCode">SortCode (Optional)</label>
                                    </div>

                                    <!-- Submit button -->
                                    <div style="text-align: center;"><button type="submit" name="submit" class="btn btn-primary">Update</button></div>
                            </form>
                            </div>
                        </div>
                        <!-- Tabs content -->
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