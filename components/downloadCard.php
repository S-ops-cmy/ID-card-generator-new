<div class="modal" id="downloadCard">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Id Card</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div id="card" class="modal-body">
                <section id="img" class="id-card container">
                    <div class="head">
                        <div><img class="img-thumbnail" src="images/icons/lpu.png" alt="logo"></div>
                        <div>
                            <p class="mb-0">Lovely Professional Univeristy</p>
                        </div>
                    </div>
                    <div class="body">
                        <div class="image">
                            <img class="img-thumbnail" src="images/student_images/<?php
                                                                                                echo $dataa['image'];
                                                                                                ?>" alt="">
                            <p class="dob"><?php
                                            echo $dataa['dob'];
                                            ?></p>
                        </div>
                        <div class="details">
                            <p><b>Name: </b> <?php echo $dataa['firstName']; ?></p>
                            <p><b>Reg : </b> <?php echo $dataa['regNo']; ?></p>
                            <p><b>Mobile: </b> <?php echo $dataa['mobile']; ?></p>
                            <p><b>Valid: </b> <?php echo $dataa['courseEnd']; ?></p>
                        </div>
                    </div>
                </section>

                <div id="showLink" class="alert alert-success text-center alert-dismissible mt-4 fade show">
                    <button type="button" class="btn-close" onclick="$('#showLink').hide();"></button>
                    <a class="text-black" id="download" href="" target="_blank">Download</a>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" onclick="capture()" class="btn btn-primary">Generate Link</button>
            </div>

        </div>
    </div>
</div>