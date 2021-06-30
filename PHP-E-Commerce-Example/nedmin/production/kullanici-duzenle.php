<?php
include 'header.php';

$kullanicisor=$db->prepare("SELECT *FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
@'id'=>$_GET['kullanici_id']
));

$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


?>
   

        <!-- sayfa içeriği -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kullanıcı Düzenleme İşlemleri<small>
                      
                      <?php  
                      if(@$_GET['durum']=='ok')
                      {?>
                        <b style="color:green;">Güncelleme başarılı</b>
                      
                      
                      <?php } elseif (@$_GET['durum']=='no')
                      {?>
                       <b style="color:red;">Güncelleme başarısız</b>
                      <?php } ?> 

                      




                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    


                    <form action="../netting/islem.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <!-- site başlığını güncelleme -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Ad-Soyad<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" name="kullanici_adsoyad" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>





                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı TC kimlik numarası<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="kullanici_tc" value="<?php echo $kullanicicek['kullanici_tc'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Mail<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Telefon Numarası<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <select id="heard" class="form-control" name="kullanici_durum" required>
                          <option value="1"<?php echo $kullanicicek['kullanici_durum']=='1'? 'selected=""' :''; ?>>aktif</option>
                          <option value="0"<?php if($kullanicicek['kullanici_durum']==0){echo 'selected=""';} ?>>pasif</option>
                      </select>
                        </div>
                      </div> 
                      
                      <input  type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']?>"></input>
                     
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right_col" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
<hr>
<hr>

</div></div>
<?php include 'footer.php';?>
  </body>
</html>
