

<?php
    $query = "SELECT * FROM pasien";
    $result = mysqli_query($conn, $query);
?>
<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>DataTables</h1>
                        <span>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Usia</th>
                                        <th>Alamat</th>
                                        <th>Last Visit</th>
                                        <th>Visit Count</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if (mysqli_num_rows($result) > 0){
                                            $i=1;
                                            while($data = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $data['id_pasien']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['jenis_kelamin']; ?></td>
                                        <td><?php echo $data['tgl_lahir']; ?></td>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $i ?></td>
                                    </tr>
                                    <?php 
                                     
                                            }
                                        }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Usia</th>
                                        <th>Alamat</th>
                                        <th>Last Visit</th>
                                        <th>Visit Count</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>



