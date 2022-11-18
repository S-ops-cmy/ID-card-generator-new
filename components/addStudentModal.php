<!-- Modal for adding students -->
<div class="modal fade" id="addStudent">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Student</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="database/addStudents.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" name="fname" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" name="lname" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control" placeholder="Mobile" name="mobile" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="reg" name="reg" required>
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3 gap-3">
                    <div class="col">
                            <label for="courseStart" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>
                        <div class="col">
                            <label for="courseStart" class="form-label">Program start date</label>
                            <input type="date" class="form-control" name="courseStart" required>
                        </div>
                        <div class="col">
                            <label for="courseEnd" class="form-label">Program end date</label>
                            <input type="date" class="form-control" name="courseEnd" required>
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="address">Address</label>
                        <textarea class="form-control" rows="2" id="address" name="address" required></textarea>
                    </div>


                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="">
                            <label for="uploadFile" class="form-label mb-0">Upload photo: </label>
                        </div>
                        <div class="">
                            <input type="file" class="form-control" name="uploadFile">
                        </div>
                    </div>

                    <button type="submit" name="addDetails" class="btn btn-primary">Submit</button>


                </form>
            </div>

        </div>
    </div>
</div>