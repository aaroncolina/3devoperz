<h1 class="display-1 text-center text-white"><?php echo $title; ?></h1>

<br>

<div class="row">
    <div class="col-md-6">
        <form>
            <div class="form-group row">
                <label for="firstname" class="col-sm-3 col-form-label text-white">First Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" placeholder="First Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-3 col-form-label text-white">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label text-white">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="contact" class="col-sm-3 col-form-label text-white">Contact Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" placeholder="Contact Number">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label text-white">Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
            </div>
                <button type="button" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
    <div class="col-md-6">
        <img src="<?php echo $img; ?>" class="img-fluid" alt="Responsive image">
    </div>
</div>