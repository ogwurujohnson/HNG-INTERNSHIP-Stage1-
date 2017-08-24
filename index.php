<!--
 * Created by PhpStorm.
 * User: BlackHatJohnny
 * Date: 8/24/2017
 * Time: 8:41 AM-->
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

</head>

<body>
<div id="wrap">
    <div class="container">
        <div class="row">


            <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                <fieldset>

                    <!-- Form Name -->
                    <legend>HNG INTERN LIST (Johnson Ogwuru (HNG)Stage1 Project)</legend>

                    <!-- File Button -->

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="filebutton">Select File</label>
                        <div class="col-md-4">
                            <small>For .CSV excel upload use here(an exmple intern excel sheeet attached to project root folder)</small>
                            <small>Work in Progress</small>
                            <input type="file" name="file" id="file" class="disabled">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                        <div class="col-md-4">
                            <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>

        <?php
        include('functions.php');
        get_all_records();
        ?>
        <div>
            <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- Modal -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="internModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Register New Intern</h4>
            </div>
            <div class="modal-body">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">

                            <form class="form-block" id="addStaff" action="functions.php" method="POST" role="form">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">FirstName</label>
                                    <input type="text" name="int_id" class="form-control" id="exampleInputFirstname" autocomplete = "off" placeholder="Intern-Id">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">FirstName</label>
                                    <input type="text" name="firstname" class="form-control" id="exampleInputFirstname" autocomplete = "off" placeholder="FirstName">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">LastName</label>
                                    <input type="text"  name="lastname" class="form-control" id="exampleInputLastname" autocomplete = "off" placeholder="LastName">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">FirstName</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputFirstname" autocomplete = "off" placeholder="Email">
                                </div>
                                </br>
                            <!--date registered-->
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">FirstName</label>
                                    <input type="text" name="date" class="form-control" id="exampleInputFirstname" autocomplete = "off" placeholder="Date Registered">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Staff</button>
                                </div>

                            </form>
                        </div><!-- /form-panel -->
                    </div><!-- /col-lg-12 -->
                </div><!-- /row -->

            </div>

        </div>
    </div>
</div>
<!--body wrapper start-->
<!-- modal -->


</body>

</html>