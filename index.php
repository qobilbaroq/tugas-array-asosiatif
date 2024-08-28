<?php include('template/header.php') ?>

<?php $students = [
    
    [
        "nama" => "ucup",
        "kelas" => "xi",
        "jurusan" => "pplg",
        "umur" => 18,
        "stasus" => "hadir"
    ],
    [
        "nama" => "otong",
        "kelas" => "xi",
        "jurusan" => "pplg",
        "umur" => 15,
        "stasus" => "sakit"
    ],
    [
        "nama" => "surucup",
        "kelas" => "xi",
        "jurusan" => "pplg",
        "umur" => 17,
        "stasus" => "alfa"
    ],
]?>




<div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>ABSENSI SISWA</h2>
            <div class="input-group dashboard-filter">
            <button class="btn btn-primary">tambah <i class="fa-solid fa-plus"></i> </button>
            </div>
        </div>

        <div class="row">
            
            <div class="col-xxl-15">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Recent Orders</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>NAMA</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>UMUR</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for ($i=0; $i < count($students); $i++){?>

                                <tr>
                                    <td><?= $i + 1?></td>
                                    <td><?= $students[$i]['nama']?></td>
                                    <td><?= $students[$i]['kelas']?></td>
                                    <td><?= $students[$i]['jurusan']?></td>
                                    <td><?= $students[$i]['umur']?></td>
                                    
                                    <td><span class="badge <?php 
                                    if ($students[$i]['stasus'] == 'hadir'){

                                        echo 'bg-success';

                                    } else if ($students[$i]['stasus'] == 'alfa'){

                                        echo 'bg-danger';

                                    }else{

                                        echo 'bg-warning';

                                    }
                                    ?>"><?= $students[$i]['stasus']?></span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                              <?php }?>

                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <!-- main content end -->

<?php include('template/footer.php') ?>
