<?php include("functions.php"); ?>
<div class="header mt-4">
    <h4 class="text-center">Contact me</h4>
</div>
<div class="row justify-content-center mt-2">
    <div class="col-md-8">
        <div class="card border-0">
            <div class="card-body">
                <?php notify(); ?>
                <div class="notice"></div>
                <form class="form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control subject" placeholder="Enter Subject">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Message" cols="30" rows="4"
                            class="form-control message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" value="Send" class="btn btn-info btn-block send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>