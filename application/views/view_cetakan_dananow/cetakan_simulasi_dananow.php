
 <style type="text/css" media="screen">
 table{width:100%}img{height:1.5cm;width:4cm;float:left}.label{color:#000;background-color:#F8F5F2;padding:3px;font-size:.75em}.field{color:#000;background-color:#F9F0E9;padding:3px;font-size:.75em}.padding_top{padding-top:5px}.word_wrap{width:20em;word-wrap:break-word}.border_table{border:1px solid #000}.title_param{width:10em;word-wrap:break-word;font-size:12px;color:#000;padding:3px}.value_riport{width:20em;word-wrap:break-word;font-size:12px;color:#000;padding:3px}.font_title{font-size:24px;font-weight:900}.font_sub_title{font-size:14px}.font_text{font-size:12px}.font_title_type{font-family:Copperplate,Copperplate Gothic Light,fantasy}.orange{color:orange}.blue{color:#00c}.dark_blue{color:navy}.blue_sky{color:#80ccff}.black{color:#000}.white{color:#fff}.bgr1{background-color:#C4C3C3}.bgr2{background-color:#F7F7F7}.center{text-align:center}.left{text-align:left}.right{text-align:right}
</style>
<h3 style="text-align: center; margin-top: 30px"><br />HASIL SIMULASI DANANOW</h3>

<div class="box-body padding_top">
  <table class="input" style="margin: 0px; border-top: 10px; margin-left: 20px; margin-right: 20px;">
    <tr class=" bgr1">
      <td><span class="title_param">Area</span></td>
      <td><span class="value_riport"><?php echo @$data->area?> </span></td>
    </tr> 
    <tr class=" bgr2">
      <td><span class="title_param">Jenis Kendaraan</span></td>
      <td><span class="value_riport"><?php echo @$data->jenis?></span></td>
    </tr>
    <tr class=" bgr1">
      <td><span class="title_param">Model Kendaraan</span></td>
      <td><span class="value_riport"><?php echo @$data->model?></span></td>
    </tr> 
    <tr class=" bgr2">
      <td><span class="title_param">Tahun Kendaraan</span></td>
      <td><span class="value_riport"><?php echo @$data->tahun?></span></td>
    </tr> 
    <tr class=" bgr1">
      <td><span class="title_param">Harga Kendaraan</span></td>
      <td><span class="value_riport"><?php echo @$data->maks_harga?></span></td>
    </tr> 
    <tr class=" bgr2">
      <td><span class="title_param">Maksimum Pencairan Dana</span></td>
      <td><span class="value_riport"><?php echo @$data->maks_pencairan?>  </span></td>
    </tr> 
    <tr class=" bgr1">
      <td><span class="title_param">Rencana Pencairan Yang Diinginkan</span></td>
      <td><span class="value_riport"><?php echo @$data->plan?></span></td>
    </tr>
  </table>


  <div class="row">
    <div class="col-md-12">
      <div class="panel-body">
        <table class="padding_top">
        </table>
        <table id="example" class="table" style="margin: 0px; border-top: 0px; margin-left: 20px; margin-right: 20px;">
          <tr>
            <td>
            </td>
          </tr>
          <tr class="title_param"> 
            <td class=" bgr2">TENOR</td>
            <td class=" bgr2">PENCAIRAN</td>
            <td class=" bgr2">ANGSURAN</td>              
          </tr>    

          <?php foreach (@$table as $detail ) { ?>
            <tr class="value_riport bgr2">
              <td class=""> <?php echo $detail->tenor?></td>
              <td class=""> <?php echo $detail->pencairan?></td>
              <td class=""> <?php echo $detail->angsuran?></td>                  
            </tr>
          <?php }  ?>
        </table>
      </div>
    </div>
  </div>



  