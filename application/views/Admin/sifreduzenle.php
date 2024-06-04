<?php $this->load->view('admin/include/header') ?>
<?php $this->load->view('admin/include/leftmenu') ?>
<?php $sifreler = sifreler::find($this->uri->segment(3)); ?>
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Şifreler</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Şifre düzenle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="<?php echo base_url('admin/sifreduzenle/' .$sifreler->id) ?>" method="post">
                                

                            <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Şifre <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                    <input type="text" name="sifre" class="form-control" value="<?php echo $sifreler->sifre?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Platform <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                    <input type="text" name="platform" class="form-control" value="<?php echo $sifreler->platform?>">
                                    </div>
                                </div>
                                
                                
                               

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Ekle</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<?php $this->load->view('admin/include/footer') ?>