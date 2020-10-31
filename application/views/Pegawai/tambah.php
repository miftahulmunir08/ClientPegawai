<div class="container">
    <div class="row mt-4">
        <div class="col-md-4">

            <div>
                <h1>Halaman Tambah</h1>

                <?php echo form_open_multipart('');?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter email"
                            name="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Enter Name"
                                name="name">
                                <small class="form-text text-danger"><?= form_error('name'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="phone"
                                    placeholder="Enter Phone"
                                    name="phone">
                                    <small class="form-text text-danger"><?= form_error('phone'); ?></small>                                
                                    </div>

                                    <div class="form-group">
                                <label for="phone">Phone</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="avatar"
                                    value="halo"
                                    name="avatar">
                                    <small class="form-text text-danger"><?= form_error('phone'); ?></small>                                
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <?php echo form_close();?>

                            </div>

                        </div>
                    </div>
                </div>