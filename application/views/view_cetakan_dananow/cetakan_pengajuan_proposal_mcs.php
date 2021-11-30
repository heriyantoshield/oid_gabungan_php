<!--Import materialize.css-->
<!-- <link href="<?php echo $url; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
<!-- <link rel="stylesheet" href="<?php echo $url; ?>assets/design/css/dompdf.css"> -->
<!--Let browser know website is optimized for mobile-->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
<!-- 
 <?php 
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
      <td class="font_title right dark_blue font_title_type">Marketing Campaign System</td>
    </tr>
</table>
<table>
    <tr><td class="font_sub_title center black bgr_aqua_blue">Proposal Info</td></tr>
</table>
<table>
    <tr><td class="font_sub_title center blue_sky bgr_blue_sky">***</td></tr>
</table>

<div class="box-body padding_top">
  <table class="input" style="margin: 0px; border-top: none;">
    <tr>
      <td><span class=" label"></span></td>
    </tr>
    <?php
    $var_ket = (Int)@$data->data_detail->prop_info[0]->detail2->is_active;
    $ket ='';
    if($var_ket == 0){
        $ket = 'DRAFT';
    }else if($var_ket == 1){
        $ket = 'INPROGRESS';
    }else if($var_ket == 2){
        $ket = 'FULL APPROVE';
    }else if($var_ket == 3){
        $ket = 'REJECT';
    }else if($var_ket == 4){
        $ket = 'REVISE';
    }else if($var_ket == 5){
        $ket = 'DELETED';
    }


    $tanpa_batas = $data->data_detail->prop_info[0]->detail1->end_period;
    if(@$data->data_detail->prop_info[0]->detail2->prop_type_id == 2 && $data->data_detail->prop_info[0]->detail1->end_period == null){
      $tanpa_batas = 'Tanpa Batas';
    }
    ?>
   

    <tr>
      <td><span class="title_param">Cabang</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->prop_info[0]->detail1->branch_name ?> </span></td>
      <td><span class="title_param">Produk Marketing</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->prop_info[0]->detail2->produk_desc ?> </span></td>
    </tr>
    <tr>
      <td><span class="title_param">No. Program</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->prop_info[0]->detail1->req_no ?></span></td> 
      <td><span class="title_param">Sumber Order</span></td>
      <td><span class="value_riport">: <?php echo $data->data_detail->prop_info[0]->detail1->channel_name ?>  </span></td>
    </tr>
    <tr>
      <td><span class="title_param">Tanggal Proposal</span></td>
      <td><span class="value_riport">: <?php echo $data->data_detail->prop_info[0]->detail2->create_date ?></span></td>
      <td><span class="title_param">Objek</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->prop_info[0]->detail1->object_desc ?> </span></td>
    </tr>
    <tr>
      <td><span class="title_param">Periode Proposal</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->prop_info[0]->detail1->start_period ?> s/d <?php echo $tanpa_batas ?></span></td>      
    </tr>
    <tr>
      <td><span class="title_param">Jenis Proposal</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->prop_info[0]->detail2->prop_type_desc ?> </span></td>
    </tr>
     <tr>
      <td><span class="title_param">Status Proposal</span></td>
      <td><span class="value_riport">: <?php echo $ket ?> </span></td>
    </tr>
    <tr>
      <td><span class="title_param">Portofolio</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->prop_info[0]->detail2->portofolio_desc ?> </span></td>
    </tr>
  </table>
  <table class="padding_top">
    <tr><td class="font_sub_title center blue_sky bgr_blue_sky">***</td></tr>
  </table>
  <table class="padding_top">
    <tr>
      <td><span class="title_param">Notes</span></td>
      <td><span class="value_riport">: <?php echo @$data->data_detail->history_approval[0]->activity_status ?></span></td>
    </tr>
  </table>
  <table class="padding_top">
    <tr><td class="font_text">-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>
    <tr><td class="font_text">Perhatian : “Ketentuan DP Net, PH Max, Sistem Rekomendasi, dll yang terkait dengan Resiko Kredit tetap mengacu pada Memo / Memo Internal Divisi Credit”</td></tr>
    <tr><td class="font_text">-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>
  </table>

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
                    <td class="border_table bgr_blue_sky_tbl">Dealer</td>
                    <td class="border_table bgr_blue_sky_tbl">Cabang</td>
                    <td class="border_table bgr_blue_sky_tbl">No Proposal</td>
                    <td class="border_table bgr_blue_sky_tbl">Target</td>
                    <td class="border_table bgr_blue_sky_tbl">Target Amount</td>                
                </tr>    
                <?php foreach (@$data->data_detail->dealer_member as $detail ) { ?>

                <tr class="value_riport">
                    <td class="border_table"><?php echo $detail->dealer_name ?></td>
                    <td class="border_table"><?php echo $detail->branch_desc ?></td>
                    <td class="border_table"><?php echo $detail->proposal_no ?></td>
                    <td class="center border_table"><?php echo $detail->target_unit ?></td>
                    <td class="center border_table"><?php echo number_format($detail->target_amount, 2,",",".") ?></td>                     
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
            <tr><td class="font_sub_title center black bgr_aqua_blue">Program</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Program</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Program</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 1){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Sumber Nasabah</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Sumber Nasabah</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Sumber Nasabah</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 2){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>
        </div>
    </div>
  </div>





  <!-- <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Program</td></tr>
          </table>
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Sumber Nasabah</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Program</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Program</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 1){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>

          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Sumber Nasabah</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Sumber Nasabah</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Sumber Nasabah</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 2){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>
        </div>
    </div>
  </div> -->





  <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Tipe Objek</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Tipe Objek</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Tipe Objek</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 3){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Merk Objek</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Merk Objek</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Merk Objek</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 4){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Model Objek Group</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Model Objek Group</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Model Objek Group</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 6){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Model Objek</td></tr>
          </table>
          <table id="example" class="table table-bordered border_table">
            <tr>
              <td>
              </td>
            </tr>
            <tr class="title_param center"> 
              <td class="border_table bgr_blue_sky_tbl">Kode Model Objek</td>
              <td class="border_table bgr_blue_sky_tbl">Nama Model Objek</td>              
            </tr>

            <?php foreach (@$data->data_detail->multiModel as $detail ) { ?>
              <?php if (@$detail->model_type == 5){ ?>
                <tr class="value_riport">
                  <td class="border_table"><?php echo $detail->model_code ?></td>
                  <td class="border_table"><?php echo $detail->model_desc ?></td>                     
                </tr>
              <?php }  ?>
            <?php }  ?>
          </table>
        </div>
    </div>
  </div>








   <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Pricing</td></tr>
          </table>
              <table id="example" class="table table-bordered border_table" >
                <tr>
                  <td>
                  </td>
                </tr>
                  <tr class="title_param center">   
                      <td class="border_table bgr_green_white">Tenor</td>
                      <td class="border_table bgr_green_white">Lending Rate</td>
                      <td class="border_table bgr_green_white">Provisi</td>
                      <td class="border_table bgr_green_white">Admin</td> 
                      <td class="border_table bgr_green_white">DP Nett</td>                  
                  </tr> 
                  <?php foreach (@$data->data_detail->pricing as $detail ) { ?>   
                  <tr class="value_riport border_table">
                      <td class="center border_table"><?php echo $detail->tennor_start ?> S/D <?php echo $detail->tennor_end ?></td>
                      <td class="center border_table"><?php echo $detail->lending_rate ?> %</td>
                      <td class="center border_table"><?php echo $detail->insurance ?> %</td>
                      <td class="center border_table"><?php echo number_format($detail->admin_fee, 2,",",".") ?></td> 
                      <td class="center border_table"><?php echo $detail->dp_net ?> %</td>                           
                  </tr>
                  <?php } ?>
              </table>
          </div>
      </div>
    </div>
    <?php if (@$data->data_detail->refund != []){ ?>
    <div class="row">
      <div class="col-md-12">
        <table id ="table_ex" class="padding_top">
          <tr><td class="font_sub_title center black bgr_aqua_blue">Refund</td></tr>
        </table>
        <table id="example" class="table table-bordered border_table" >
            <tr>
              <td>
              </td>
            </tr>
              <tr class="title_param center">   
                  <td class="border_table bgr_green_white">Recipient</td>
                  <td class="border_table bgr_green_white">Refund</td>
<!--                   <td class="border_table bgr_green_white">Ref. Upping Admin</td>
                  <td class="border_table bgr_green_white">Ref. Upping Asuransi</td>  
                  <td class="border_table bgr_green_white">Ref. Upping Rate</td>  
                  <td class="border_table bgr_green_white">Ref. Upping Provisi</td>     -->               
              </tr> 
              <?php foreach (@$data->data_detail->refund as $detail ) { ?>   
              <tr class="value_riport border_table">
                  <td class="center border_table"><?php echo $detail->recepience ?></td>
                  <td class="center border_table"><?php echo $detail->refund ?></td>
                  <!-- <td class="center border_table"><?php echo $detail->upping_admin ?></td>
                  <td class="center border_table"><?php echo $detail->upping_insurance ?></td>   
                  <td class="center border_table"><?php echo $detail->upping_rate ?></td>   
                  <td class="center border_table"><?php echo $detail->upping_provisi ?></td>     -->                         
              </tr>
              <?php } ?>
          </table>
      </div>
    </div>
    <?php } ?> 

    <?php if (@$data->data_detail->insf_kondisional != []){ ?>
    <div class="row">
      <div class="col-md-12">
        <table id ="table_ex" class="padding_top">
          <tr><td class="font_sub_title center black bgr_aqua_blue">Insentif Conditional</td></tr>
        </table>
        <table id="example" class="table table-bordered border_table" >
            <tr>
              <td>
              </td>
            </tr>
              <tr class="title_param center">   
                  <td class="border_table bgr_green_white">Recipient</td>
                  <!-- <td class="border_table bgr_green_white">Tennor</td> -->
                  <td class="border_table bgr_green_white">Unit</td>
                <!--   <td class="border_table bgr_green_white">Tahun Kendaraan</td>  
                  <td class="border_table bgr_green_white">Pokok Hutang</td>   -->
                  <td class="border_table bgr_green_white">Amount</td>                   
              </tr> 
              <?php foreach (@$data->data_detail->insf_kondisional as $detail ) { ?>   


              <tr class="value_riport border_table">
                <td class="center border_table"><?php echo $detail->recipient ?></td>
                <!-- <td class="center border_table">
                	<?php if($detail->tennor_all == 1){
                		echo 'ALL';
                	}else{?>
                		<?php echo $detail->tennor_start ?> S/D <?php echo $detail->tennor_end ?> 
                	<?php } ?>
				</td>  -->
                <td class="center border_table">
                	<?php if($detail->unit_all == 1){
                		echo 'ALL';
                	}else{?>
                		<?php echo $detail->unit_min ?> S/D <?php echo $detail->unit_max ?> 
                	<?php } ?>
                </td>
                <!--   <td class="center border_table">
                  	<?php if($detail->unit_year_all == 1){
                		echo 'ALL';
                	}else{?>
                		<?php echo $detail->unit_year_min ?> S/D <?php echo $detail->unit_year_max ?>  
                	<?php } ?>
                  </td>
                  <td class="center border_table">
                  <?php if($detail->pa_all == 1){
                		echo 'ALL';
                	}else{?>
                		<?php echo number_format($detail->pa_min, 2,",",".") ?> S/D <?php echo number_format($detail->pa_max , 2,",",".")?> 
                	<?php } ?>
                  </td> -->
                  <td class="center border_table"><?php echo number_format($detail->insf_amount , 2,",",".")  ?></td>                             
              </tr>
              <?php } ?>
          </table>
      </div>
    </div>
    <?php } ?>


    <?php if (@$data->data_detail->komisi != []){ ?>
    <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Komisi Langsung</td></tr>
          </table>
              <table id="example" class="table table-bordered border_table" >
                <tr>
                  <td>
                  </td>
                </tr>
                  <tr class="title_param center">   
                      <td class="border_table bgr_green_white">Recipient</td>
                      <td class="border_table bgr_green_white">Pokok Hutang</td>

                      <?php if (@$data->data_detail->prop_info[0]->detail2->portofolio_code == 'MGM' || @$data->data_detail->prop_info[0]->detail2->portofolio_code == 'MGC'){ ?>
                        <td class="border_table bgr_green_white">Tennor</td>
                      <?php } ?>

                      <td class="border_table bgr_green_white">Amount</td>                 
                  </tr> 
                  <?php foreach (@$data->data_detail->komisi as $detail ) { ?>   
                  <tr class="value_riport border_table">
                      <td class="center border_table"><?php echo $detail->komisi_recipient_desc ?></td>
                      <td class="center border_table"><?php echo number_format($detail->pa_start, 2,",",".") ?> S/D <?php echo number_format($detail->pa_end, 2,",",".") ?></td>
                      <?php if (@$data->data_detail->prop_info[0]->detail2->portofolio_code == 'MGM' || @$data->data_detail->prop_info[0]->detail2->portofolio_code == 'MGC'){ ?>
                      <td class="center border_table"><?php echo $detail->tennor_start ?> S/D <?php echo $detail->tennor_end ?></td>
                      <?php } ?>
                      <td class="center border_table"><?php echo number_format($detail->amount, 2,",",".") ?></td>                          
                  </tr>
                  <?php } ?>
              </table>
          </div>
      </div>
    </div>
    <?php } ?>

    <?php if (@$data->data_detail->insf_basic != []){ ?>
    <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
            <table class="padding_top">
              <tr><td class="font_sub_title center black bgr_aqua_blue">Insentif</td></tr>
            </table>
              <table id="example" class="table table-bordered border_table" >
                <tr>
                  <td>
                  </td>
                </tr>
                  <tr class="title_param center">   
                      <td class="border_table bgr_green_white">Recipient</td>
                      <td class="border_table bgr_green_white">Unit</td>
                      <td class="border_table bgr_green_white">Amount</td>                 
                  </tr> 
                  <?php foreach (@$data->data_detail->insf_basic as $detail ) { ?>   
                  <tr class="value_riport border_table">
                      <td class="center border_table"><?php echo $detail->recipient ?></td>
                      <td class="center border_table"><?php echo $detail->unit_min ?> S/D <?php echo $detail->unit_max ?></td>
                      <td class="center border_table"><?php echo number_format($detail->insf_amount , 2,",",".") ?></td>                          
                  </tr>
                  <?php } ?>
              </table>
          </div>
      </div>
    </div>
    <?php } ?>

    <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
          <table class="padding_top">
            <tr><td class="font_sub_title center black bgr_blue_sky">Pesaing</td></tr>
          </table>
            <?php if (@$data->data_detail->kompetitor_analys != []){ ?>
              <table id="example" class="table table-bordered border_table" >
                <tr>
                  <td>
                  </td>
                </tr>
                  <tr class="title_param center">   
                      <td class="border_table bgr_green_white">Nama Kompetitor</td>
                      <td class="border_table bgr_green_white">Refund</td>
                     <!--  <td class="border_table bgr_green_white">Refund Upping Admin </td>
                      <td class="border_table bgr_green_white">Refund Asuransi</td>
                      <td class="border_table bgr_green_white">Refund Rate</td> 
                      <td class="border_table bgr_green_white">Refund Provisi</td>    -->               
                  </tr> 
                  <?php foreach (@$data->data_detail->kompetitor_analys as $detail ) { ?>   
                  <tr class="value_riport border_table">
                      <td class="border_table"><?php echo $detail->competitor_name ?></td>
                      <td class="border_table"><?php echo $detail->refund ?></td>
                      <!-- <td class="center border_table"><?php echo $detail->upping_admin ?></td>
                      <td class="center border_table"><?php echo $detail->upping_insc ?></td>
                      <td class="center border_table"><?php echo $detail->upping_rate ?></td> 
                      <td class="center border_table"><?php echo $detail->upping_provisi ?></td> -->                           
                  </tr>
                  <?php } ?>
              </table>
            <?php } ?> 

            <?php if (@$data->data_detail->kompetitor_komisi != []){ ?>
            <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                  <table class="padding_top">
                    <tr><td class="font_sub_title center black bgr_aqua_blue">Komisi Langsung</td></tr>
                  </table>
                      <table id="example" class="table table-bordered border_table" >
                        <tr>
                          <td>
                          </td>
                        </tr>
                          <tr class="title_param center">
                              <td class="border_table bgr_green_white">Nama Kompetitor</td>   
                              <td class="border_table bgr_green_white">Pokok Hutang</td>
                              <!-- <td class="border_table bgr_green_white">Tennor</td> -->
                              <td class="border_table bgr_green_white">Amount</td>                 
                          </tr> 
                          <?php foreach (@$data->data_detail->kompetitor_komisi as $detail ) { ?>   
                          <tr class="value_riport border_table">
                              <td class="center border_table"><?php echo $detail->competitor_name ?></td>
                              <td class="center border_table"><?php echo number_format($detail->pa_start, 2,",",".") ?> S/D <?php echo number_format($detail->pa_end, 2,",",".") ?></td>
                              <!-- <td class="center border_table"><?php echo $detail->tennor_start ?> S/D <?php echo $detail->tennor_end ?></td> -->
                              <td class="center border_table"><?php echo number_format($detail->amount, 2,",",".") ?></td>   
                          </tr>
                          <?php } ?>
                      </table>
                  </div>
              </div>
            </div>
            <?php } ?>

            <?php if (@$data->data_detail->kompetitor_insf != []){ ?>
            <div class="row">
              <div class="col-md-12">
                <div class="panel-body">
                    <table class="padding_top">
                      <tr><td class="font_sub_title center black bgr_aqua_blue">Insentif</td></tr>
                    </table>
                      <table id="example" class="table table-bordered border_table" >
                        <tr>
                          <td>
                          </td>
                        </tr>
                          <tr class="title_param center">   
                             <td class="border_table bgr_green_white">Nama Kompetitor</td>  
                              <td class="border_table bgr_green_white">Unit</td>
                              <td class="border_table bgr_green_white">Amount</td>                 
                          </tr> 
                          <?php foreach (@$data->data_detail->kompetitor_insf as $detail ) { ?>   
                          <tr class="value_riport border_table">
                              <td class="center border_table"><?php echo $detail->competitor_name ?></td>
                              <td class="center border_table"><?php echo $detail->unit_min ?> S/D <?php echo $detail->unit_max ?></td>
                              <td class="center border_table"><?php echo number_format($detail->insf_amount, 2,",",".") ?></td> 
                          </tr>
                          <?php } ?>
                      </table>
                  </div>
              </div>
            </div>
          <?php } ?>

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
                      <td class="border_table bgr_green_white">Status</td>
                      <td class="border_table bgr_green_white">Note</td>
                      <td class="border_table bgr_green_white">Tanggal Masuk</td>
                      <td class="border_table bgr_green_white">Tanggal klaim</td>               
                  </tr>  
                  <?php foreach (@$data->data_detail->history_approval as $detail ) { ?>  
                  <tr class="value_riport border_table">
                      <td class="border_table"><?php echo $detail->activity_name?></td>
                      <td class="border_table"><?php echo $detail->activity_status ?></td>
                      <td class="border_table"><?php echo $detail->note ?></td>
                      <td class="border_table"><?php echo substr($detail->date_in,0,10) ?></td> 
                      <td class="border_table"><?php echo substr($detail->date_out,0,10) ?></td>                        
                  </tr>
                  <?php } ?>
              </table>
          </div>
      </div>
    </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel-body">
          <table  class="padding_top ">
            <tr><td class="font_sub_title center black bgr_aqua_blue">Summary</td></tr>
          </table>
          <?php foreach ($data->data_detail->summuray_proposal as $count) { ?> 
            <table id="example" class="table table-bordered border_table" >
              <tr>
                <td>
                </td>
              </tr>
                <tr class="title_param center">   
                    <td class="border_table bgr_blue_sky_tbl">Dealer</td>
                    <td class="border_table bgr_green_white">Tenor</td>
                    <td class="border_table bgr_green_white">Insentif</td>
                    <td class="border_table bgr_green_white">Komisi</td>
                    <td class="border_table bgr_green_white">TAC</td>
                    <td class="border_table bgr_green_white">NLR</td> 
                    <td class="border_table bgr_green_white">Admin</td>   
                    <td class="border_table bgr_green_white">TAC Persen</td>   
                   <!--  <td class="border_table bgr_green_white">TAC2 Persen</td>   
                    <td class="border_table bgr_green_white">TAC3 Persen</td>
                    <td class="border_table bgr_green_white">Opex Persen</td> 
                    <td class="border_table bgr_green_white">Ncl Persen</td>  
                    <td class="border_table bgr_green_white">Cof Persen</td>  
                    <td class="border_table bgr_green_white">Tax Persen</td>   -->
                    <td class="border_table bgr_green_white">Pbt</td>  
                    <td class="border_table bgr_green_white">Pat</td>                      
                </tr>
                <?php foreach($count->data as $detail) { ?> 
                <!-- // <?php //if ($code_deal->dealer_code ==  $detail->dealer_code) { ?>    -->
                <tr class="value_riport border_table">
                    <td class="border_table"><?php echo $detail->dealer_name ?></td>
                    <td class="border_table"><?php echo $detail->tennor_start ?> S/D <?php echo $detail->tennor_end ?></td>
                    <td class="border_table"><?php echo number_format($detail->total_insf_master, 0,",",".") ?></td>
                    <td class="border_table"><?php echo number_format($detail->max_komisi_master, 0,",",".") ?></td>
                    <td class="center border_table"><?php echo number_format($detail->tac, 0,",",".") ?></td>
                    <td class="border_table"><?php echo $detail->nlr ?></td> 
                    <td class="border_table"><?php echo number_format($detail->fee_income, 0,",",".") ?></td> 
                    <td class="center border_table"><?php echo substr($detail->tac_persen,0,5) ?> %</td> 
        <!--             <td class="center border_table"><?php echo substr($detail->tac2_persen,0,5) ?>%</td>
                    <td class="center border_table"><?php echo substr($detail->tac3_persen,0,5) ?>%</td> 
                    <td class="center border_table"><?php echo substr($detail->opex_persen,0,5) ?>%</td>
                    <td class="center border_table"><?php echo substr($detail->ncl_persen,0,5) ?>%</td> 
                    <td class="center border_table"><?php echo substr($detail->cof_persen,0,5) ?>%</td>
                    <td class="center border_table"><?php echo substr($detail->tax_persen,0,5) ?>%</td> -->
                    <td class="border_table"><?php echo substr($detail->pbt,0,5) ?>%</td>
                    <td class="border_table"><?php echo substr($detail->pat,0,5) ?>%</td>                           
                </tr>
                <?php } ?>
            </table>
            <br />
            <?php } ?>
         </div>
       </div>
    </div>

      </div>
  </div>
</div>
    


    


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>