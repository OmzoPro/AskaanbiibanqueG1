

<!-- Start Open Account Banner -->

        <section class="open-account-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Formulaire pour ajout utilisateur</h2>
                </div>

                <div class="open-account-form">
                    <form action="controler/addUser.php" method="POST">
                        <div class="row">
                           
                            

                          

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>mon</label>
                                    <input type="text" class="form-control" placeholder="mon" name="mon">
                                </div>
                            </div>

                            
                           

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="Password" class="form-control" placeholder="password" name="password">
                                </div>
                            </div>

                            

                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>role</label>

                                    <select name="role">
                                        <option value="agent">agent</option>
                                        <option value="chef_agent">chef_agent</option>
                                    </select>
                                </div>
                            </div>

                            


                            <div class="col-lg-12">
                                <div class="banner-form-btn">
                                    <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Open Account Banner -->
        
