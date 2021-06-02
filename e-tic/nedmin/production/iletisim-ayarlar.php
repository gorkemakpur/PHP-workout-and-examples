<?php
include 'header.php';
?>
   

        <!-- sayfa içeriği -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İletişim Ayarları<small>
                      
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
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon Numarası<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $ayarcek['ayar_tel'] ?>" name="ayar_tel" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

            

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">GSM<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Faks<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_faks" value="<?php echo $ayarcek['ayar_faks'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">il<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_il" value="<?php echo $ayarcek['ayar_il'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ilce<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_ilce" value="<?php echo $ayarcek['ayar_ilce'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adres<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_adres" 
                          value="<?php echo $ayarcek['ayar_adres'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesai<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_mesai" 
                          value="<?php echo $ayarcek['ayar_mesai'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      
                      
                      
                     
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right_col" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" name="iletisimayarkaydet" class="btn btn-success">Güncelle</button>
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
