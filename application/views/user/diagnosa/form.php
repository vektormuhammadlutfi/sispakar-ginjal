<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important; padding-top: 15%" >
  <div class="container">
    <?php echo form_open()?>
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-60 col-lg-6">
        <div class="title text-center">
          <h3 style="margin-bottom: 0px; color: #283290;"><br>Diagnosa Certainty Factor dan Dempster Shafer</h3><br>
          <p style="color: #283290;">Silahkan pilih gejala yang dirasakan...</p><br>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 col-md-offset-2" style="color: #000000;">
        <?php foreach($listKelompok->result() as $value){?>
        <span style="font-weight: bold;" ><?php echo $value->nama?></span><br>
        <?php
        $this->load->model(array('Gejala_model'));
        $listGejala = $this->Gejala_model->get_by_kelompok($value->id_klp_gejala);
        foreach($listGejala->result() as $value2){?>
        <input type="checkbox" name="gejala[<?php echo $value2->kd_gejala ?>]" value="<?php echo $value2->kd_gejala?>" > <?php echo $value2->kd_gejala." - ".$value2->nama_gejala?> <br>
        <br>
        <?php }?>
        <?php } ?>
      </div>
    </div>
    <br>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6" style="float: left; padding-bottom: 5%;">
        <input type="checkbox" name="allbox" value="check" onclick="checkAll(0);" /><span style="color: #000000;">Centang semua</span>
        <br><br>
        <button type="submit" name="submit" class="btn btn-primary"><span class="fa fa-send"></span>Proses</button>
      </div>
    </div>
  </div>
  <?php echo form_close()?>
</section>

<script type="text/javascript"> 
//check all checkbox
function checkAll(form){
  for (var i=0;i<document.forms[form].elements.length;i++)
  {
    var e=document.forms[form].elements[i];
    if ((e.name !='allbox') && (e.type=='checkbox'))
    {
      e.checked=document.forms[form].allbox.checked;
    }
  }
}
</script>

