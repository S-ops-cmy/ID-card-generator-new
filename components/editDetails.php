<div class="modal fade" id="edit">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Student Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

            </div>



            <!-- Modal body -->
            <div class="modal-body">
                <form action="database/updateDetails.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $data['firstName'];?>">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $data['lastName'];?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email" name="email" required value="<?php
                                                                                                                echo $data['email'];
                                                                                                                ?>">
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control" placeholder="Mobile" name="mobile" required value="<?php
                                                                                                                echo $data['mobile'];
                                                                                                                ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="reg" name="reg" required value="<?php
                                                                                                            echo $data['regNo'];
                                                                                                            ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3 gap-3">
                        <div class="col">
                            <label for="courseStart" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" name="dob" required value="<?php
                                                                                        echo $data['dob'];
                                                                                        ?>">
                        </div>
                        <div class="col">
                            <label for="courseStart" class="form-label">Program start date</label>
                            <input type="date" class="form-control" name="courseStart" required value="<?php echo $data['courseStart'];
                                                                                                ?>">
                        </div>
                        <div class="col">
                            <label for="courseEnd" class="form-label">Program end date</label>
                            <input type="date" class="form-control" name="courseEnd"  required value="<?php echo $data['courseEnd'];?>">
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="address">Address</label>
                        <textarea class="form-control" rows="2" id="address" name="address" required><?php echo $data['address'];?></textarea>
                    </div>

                    <div>
                      <p>Current Image:</p>
                        <img class="img-thumbnail" width="100px" src="images/student_images/<?php echo $data['image'];?>" alt="">
                    </div>


                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="">
                            <label for="uploadFile" class="form-label mb-0">update photo: </label>
                        </div>
                        <div class="">
                            <input type="hidden" name="fileName" value="<?php echo $data['image']; ?>">
                            <input type="file" class="form-control" name="uploadFile">
                        </div>
                    </div>

                    <button type="submit" name="addDetails" class="btn btn-primary">Submit</button>

                </form>
            </div>

        </div>
    </div>
</div>