<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Data Pesanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Print Laporan', ['/pesanan/print-laporan'], ['class' => 'btn btn-warning']) ?>
    </p>

<div class="box">
    <div class="box-header">
        <b><center> <h3 class="box-title">Laporan Data Pesanan</h3></center></b>
    </div>

<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><center>No</center></th>
            <th><center>Id Pesanan</center></th>
            <th><center>Kode Pesanan</center></th>
            <th><center>Nama Konsumen</center></th>
            <th><center>Tanggal Pesanan</center></th>
            <th><center>Status</center></th>
            <th><center>Catatan Opsional</center></th>
            <th><center>Aksi</center></th>
        </tr>
        </thead>

        <tbody>

        <?php
        $no=1;foreach($model as $db):

        ?>
           <td><center><?= $no; ?></center></td>    
           <td><center><?= $db['id_pesanan']?></center></td>    
           <td><center><?= $db['kode_pesanan']?></center></td>    
           <td><center><?= $db['nama_lengkap']?></center></td>    
           <td><center><?= $db['tanggal_pesanan']?></center></td>    
           <td><center><?= $db['status']?></center></td>
           <td><center><?= $db['catatan_opsional']?></center></td>      

           <td> <center>
                <?= Html::a('<i class="fa fa-search"></i>', ['/pesanan/view', 'id' =>$db['id_pesanan']], ['class' => 'btn btn-warning btn-xs']) ?>
                


             </center></td>
          </tr>

            <?php $no++;endforeach; ?>

          </tbody>
        </table>           
       </div>         
     </div>               

</div>
