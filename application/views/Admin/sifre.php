<?php $this->load->view('admin/include/header') ?>
<?php $this->load->view('admin/include/leftmenu') ?>
<?php $sifre = sifreler::select(); ?>
<?php  $i = 1;?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
       
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="card-title">Şifreler</h4>
                        <div class="btn btn-success">
                            <a href="<?php echo base_url('admin/PassGenerator/')?>">Şifre Oluştur</a></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>

                                        <th>Şifre no:</th>
                                        <th>Şifre:</th>
                                        <th>Kullanıldığı yer:</th>
                                        <th>İşlemler:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                       <?php foreach ($sifre as $pass) {?>                                
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $pass->sifre?></td>
                                        <td><?php echo $pass->platform?></td>
                                        <td>
                                            <a  class="btn btn-warning" href="<?php echo base_url('admin/sifreduzenle/'.$pass->id)?>"><i class="fa fa-edit"></i>Düzenle</a>
                                            <a class="btn btn-danger" href="<?php echo base_url('admin/sifresil/'.$pass->id )?>"><i class="fa fa-remove"></i> Sil</a>
                                         
                                          
                                        </td>


                                    </tr>
                                    <?php }?>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

<?php $this->load->view('admin/include/footer') ?>
