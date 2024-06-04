<?php $this->load->view('admin/include/header') ?>
<?php $this->load->view('admin/include/leftmenu') ?>


<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Şifreler</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Şifre Oluştur</a></li>
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
                                    <form class="form-valide" action="<?php echo base_url('admin/PassGenerator')?>" method="post">
                                    <div class="col-lg-12">
                    
                                <h4 class="card-title">Şifre Oluşturucu</h4>
                                
                            </div>
                <div class="row">
                    <div class="col-lg-12">
                          <div class="basic-form">
                                    <form>
                                        <div class="form-group">Şifre
                                            <input type="text" name="sifre" class="form-control input-default" value="<?php   echo password_generate(10)."\n";?>">
                                           Platform: <input type="text" name="platform" class="form-control input-default" placeholder="Kullanılacağı platform">
                                        </div>
                                 
                                </div>
                            </div>
                        </div>
                   
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit"  class="btn btn-primary">Ekle</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
            <!-- #/ container -->
        </div>

<?php $this->load->view('admin/include/footer') ?>