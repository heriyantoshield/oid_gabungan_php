<!--Import materialize.css-->
<!-- <link href="<?php echo $url; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
<!-- <link rel="stylesheet" href="<?php echo $url; ?>assets/design/css/dompdf.css"> -->
<!--Let browser know website is optimized for mobile-->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->

<!-- <?php 
   echo '<pre>';
    var_dump($data); 
    echo '</pre>'; 
 ?>  -->
<style type="text/css" media="screen">
  table{width:100%}img{height:1.5cm;width:4cm;float:left}.label{color:#000;background-color:#F8F5F2;padding:3px;font-size:.75em}.field{color:#000;background-color:#F9F0E9;padding:3px;font-size:.75em}.padding_top{padding-top:5px}.word_wrap{width:20em;word-wrap:break-word}.border_table{border:1px solid #000}.title_param{width:10em;word-wrap:break-word;font-size:12px;color:#000;padding:3px}.value_riport{width:20em;word-wrap:break-word;font-size:12px;color:#000;padding:3px}.font_title{font-size:24px;font-weight:900}.font_sub_title{font-size:14px}.font_text{font-size:12px}.font_title_type{font-family:Copperplate,Copperplate Gothic Light,fantasy}.orange{color:orange}.blue{color:#00c}.dark_blue{color:navy}.blue_sky{color:#80ccff}.black{color:#000}.white{color:#fff}.bgr_aqua_blue{background-color:#b3e0ff}.bgr_blue_sky{background-color:#80ccff}.bgr_aqua_purple{background-color:#b3b3ff}.bgr_red{background-color:#f33}.bgr_green_white{background-color:#e0e0d1}.bgr_blue_sky_tbl{background-color:#ffc}.center{text-align:center}.left{text-align:left}.right{text-align:right}
</style>
<table> 
    <tr>
      <!-- <td><img src="<?php echo $url; ?>assets/design/images/logo.png"/></td> -->
      <td class="font_title right dark_blue font_title_type">Market Price</td>
    </tr>
</table>
<table>
    <tr><td class="font_sub_title center black bgr_aqua_blue">Market Price Info</td></tr>
</table>
<!-- <table>
    <tr><td class="font_sub_title center blue_sky bgr_blue_sky">***</td></tr>
</table> -->

<div class="box-body padding_top">
  <table class="input" style="margin: 0px; border-top: none;">
    <tr>
      <td><span class="title_param">No. Program</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->request_no ?> </span></td>
      <td><span class="title_param">NIK Inisiator</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->initiator_nik ?> </span></td>
    </tr> 
    <tr>
      <td><span class="title_param">Tanggal Proposal</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->tgl_proposal ?> </span></td>
      <td><span class="title_param">Lokasi Inisiator</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->initiator_location_desc ?> </span></td>
    </tr>
    <tr>
      <td><span class="title_param">Periode Proposal</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->start_period ?> s/d <?php echo @$data->MrpInfo[0]->end_period ?></span></td>
      <td><span class="title_param">Objek</span></td>
      <td><span class="value_riport">: <?php echo @$data->Object[0]->obj_desc ?> </span></td>
    </tr> 
    <tr>
      <td><span class="title_param">Nilai Upping</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->upping_mrp ?> %</span></td>
      <td><span class="title_param">Brand</span></td>
      <td><span class="value_riport">: <?php echo @$data->Object[0]->obj_brand_desc ?> </span></td>
    </tr> 
    <tr>
      <td><span class="title_param">Status</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->activity_status ?> </span></td>
      <td><span class="title_param">Tipe Object</span></td>
      <td><span class="value_riport">: <?php echo @$data->Object[0]->obj_type_desc ?> </span></td>
    </tr> 
    <tr>
      <td><span class="title_param">Status Workflow</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->workflow_status ?> </span></td>
      <td><span class="title_param">Model Group Object</span></td>
      <td><span class="value_riport">: <?php echo @$data->Object[0]->obj_model_group_desc ?> </span></td>
    </tr> 
    <tr>
      <td><span class="title_param">Inisiator</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->initiator_name ?> </span></td>
      <!-- <td><span class="title_param">Area</span></td>
      <td><span class="value_riport">: <?php echo @$data->Area[0]->area_desc ?> </span></td> -->
      <td><span class="title_param">Tahun Kendaraan</span></td>
      <td><span class="value_riport">: <?php echo @$data->MrpInfo[0]->start_year ?> </span></td>
    </tr>
  </table>

  <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Area</td></tr>
          </table>
            <table id="example" class="table table-bordered border_table">
              <tr>
                <td>
                </td>
              </tr>
                <tr class="title_param center"> 
                    <td class="border_table bgr_blue_sky_tbl">Kode Area</td>
                    <td class="border_table bgr_blue_sky_tbl">Area</td>          
                </tr> 
                <?php foreach (@$data->Area as $area ) { ?>

                <tr class="value_riport">
                    <td class="border_table"><?php echo $area->area_code ?></td> 
                    <td class="border_table"><?php echo $area->area_desc ?></td>                                    
                </tr>
                <?php }  ?>
          </table>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Cabang</td></tr>
          </table>
              <table id="example" class="table table-bordered border_table" >
                <tr>
                  <td>
                  </td>
                </tr>
                  <tr class="title_param center"> 
                    <td class="border_table bgr_blue_sky_tbl">Kode Cabang</td>
                    <td class="border_table bgr_blue_sky_tbl">Cabang</td>          
                  </tr> 
                  <?php foreach (@$data->Branch as $cabang ) { ?>   
                  <tr class="value_riport border_table">
                      <td class="border_table"><?php echo $cabang->branch_code ?> </td>
                      <td class="border_table"><?php echo $cabang->branch_desc ?> </td>                          
                  </tr>
                  <?php } ?>
              </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Model Object</td></tr>
          </table>
              <table id="example" class="table table-bordered border_table" >
                <tr>
                  <td>
                  </td>
                </tr>
                  <tr class="title_param center">   
                      <td class="border_table bgr_blue_sky_tbl">Kode Model Object</td>
                      <td class="border_table bgr_blue_sky_tbl">Model Object</td>                
                      <td class="border_table bgr_blue_sky_tbl">MRP Basic saat Full Approved</td>                
                      <td class="border_table bgr_blue_sky_tbl">Harga Upping MRP</td>                
                  </tr> 

                  <?php $upping_mrp = @$data->MrpInfo[0]->upping_mrp; foreach (@$data->ModelObject as $model ) { ?>
                  <tr class="value_riport border_table">
                      <td class="border_table"><?php echo $model->obj_model ?> </td>
                      <td class="border_table"><?php echo $model->obj_model_desc ?> </td>
                      <td class="border_table right"><?php echo number_format($model->objPrice,2,".",","); ?> </td>
                      <td class="border_table right"><?php echo number_format($model->objPrice / 100 * (100 + $upping_mrp),2,".",","); ?></td>
                  </tr>
                  <?php } ?>
              </table>
              <p style="font-size: 11 px;">*Harga Basic dapat berubah sewaktu-waktu mengikuti Memo MRP Basic *Harga Upping MRP mengikuti perubahan Harga Basic MRP</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Dealer</td></tr>
          </table>
            <table id="example" class="table table-bordered border_table">
              <tr>
                <td>
                </td>
              </tr>
                <tr class="title_param center"> 
                    <td class="border_table bgr_blue_sky_tbl">Kode Dealer</td>
                    <td class="border_table bgr_blue_sky_tbl">Dealer</td>          
                </tr> 
                <?php foreach (@$data->Dealer as $dealer ) { ?>

                <tr class="value_riport">
                    <td class="border_table"><?php echo $dealer->dealer_code ?></td>
                    <td class="border_table"><?php echo $dealer->dealer_desc ?></td>                                    
                </tr>
                <?php }  ?>
          </table>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top ">
            <tr><td class="font_sub_title center black bgr_aqua_blue">History Approval</td></tr>
          </table>
              <table id="example" class="table table-bordered border_table" >
                <tr>
                  <td>
                  </td>
                </tr>
                  <tr class="title_param center">   
                      <td class="border_table bgr_green_white">Approve</td>
                      <td class="border_table bgr_green_white">Initiator</td>
                      <td class="border_table bgr_green_white">Status</td>
                      <td class="border_table bgr_green_white">Note</td>
                      <td class="border_table bgr_green_white">Tanggal Masuk</td>
                      <td class="border_table bgr_green_white">Tanggal klaim</td>               
                  </tr>  
                  <?php foreach (@$data->HistoryApproval as $detail ) { ?>  
                  <tr class="value_riport border_table">
                      <td class="border_table"><?php echo $detail->approvalType ?></td>
                      <td class="border_table"><?php echo $detail->activityName ?></td>
                      <td class="border_table"><?php echo $detail->activityStatus ?></td>
                      <td class="border_table"><?php echo $detail->note ?></td>
                      <td class="border_table"><?php echo substr($detail->dateIn,0,10) ?></td> 
                      <td class="border_table"><?php echo substr($detail->dateOut,0,10) ?></td>                        
                  </tr>
                  <?php } ?>
              </table>
          </div>
      </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>