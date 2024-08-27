<?php include('template/header.php') ?>

<?php $students = [
    
    [
        "ucup",
        "xi",
        "pplg",
        18,
        "hadir"
    ],
    [
        "surucup",
        "xi",
        "pplg",
        17,
        "hadir"
    ],
    [
        "otong",
        "xi",
        "pplg",
        17,
        "sakit"
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
                                    <td><?= $students[$i][0]?></td>
                                    <td><?= $students[$i][1]?></td>
                                    <td><?= $students[$i][2]?></td>
                                    <td><?= $students[$i][3]?></td>
                                    
                                    <td><span class="badge bg-success p-3"><?= $students[$i][4]?></span></td>
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
