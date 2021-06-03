<?php include('profileheader.php'); ?>
            <!--Profile End-->       
           <!---Referals-->
           <section class="bio ">
                <div class="my-row" style="height: auto; overflow: hidden;">
                    <?php include('head.php'); ?>
                    <div class="referals">
                   
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
                                >Personal information</a
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
                                <form class="personal-info">
                                    <!-- First-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="__firstName" class="form-control" />
                                        <label class="form-label" for="__firstName">First name</label>
                                    </div>

                                    <!-- Last-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="__lastName" class="form-control" />
                                        <label class="form-label" for="__lastName">Last name</label>
                                    </div>
                                    
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="__email" class="form-control" />
                                        <label class="form-label" for="__email">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="number" id="__phone" class="form-control" />
                                        <label class="form-label" for="__phone">Phone</label>
                                    </div>
                                    
                                    <!-- Date of birth input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="__birthDate" class="form-control" />
                                        <label class="form-label" for="__birthDate">Date of birth</label>
                                    </div>

                                    <!-- Address input -->
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="__address" rows="4"></textarea>
                                        <label class="form-label" for="__address">Address</label>
                                    </div>

                                    <!-- state input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="__state" class="form-control" />
                                        <label class="form-label" for="__state">State</label>
                                    </div>

                                    <!-- Sex input -->
                                    <div class="form-outline mb-4">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="flexRadioDefault"
                                            id="__male"
                                        />
                                        <label class="form-check-label" for="__male"> Male </label>
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="flexRadioDefault"
                                            id="__female"
                                        />
                                        <label class="form-check-label" for="__female"> Female</label>
                                    </div>

                                    <!-- Submit button -->
                                    <div style="text-align: center;"><button type="submit" class="btn btn-primary">Sign in</button></div>
                                </form>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="ex3-tabs-2"
                                role="tabpanel"
                                aria-labelledby="ex3-tab-2"
                            >
                            <form class="personal-info">
                                    <!-- Bank-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="__bankName" class="form-control" />
                                        <label class="form-label" for="__bankName">Name of Bank</label>
                                    </div>

                                    <!-- Account-name input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="__accountName" class="form-control" />
                                        <label class="form-label" for="__accountName">Account name</label>
                                    </div>
                                    
                                    <!-- Account-number input -->
                                    <div class="form-outline mb-4">
                                        <input type="number" id="__accountNo" class="form-control" />
                                        <label class="form-label" for="__accountNo">Account Number</label>
                                    </div>

                                    <!-- sort-code input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="__sortCode" class="form-control" />
                                        <label class="form-label" for="__sortCode">SortCode</label>
                                    </div>

                                    <!-- Submit button -->
                                    <div style="text-align: center;"><button type="submit" class="btn btn-primary">Sign in</button></div>
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