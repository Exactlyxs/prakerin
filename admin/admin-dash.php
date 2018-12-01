

<?php 
    include 'sidebar.php';
?>
    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1>Manage Pengumuman</h1>
                <a href="mading/add_mading.php" class="btn btn-success my-2">Tambah</a>
                <div class="mading">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>isi</th>
                                <th>Pembuat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Kelas</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, id obcaecati, illo
                                    nemo incidunt maiores magnam culpa odit possimus officiis cum voluptatum. Illo,
                                    atque. Eum illum modi doloremque reprehenderit nostrum!</td>
                                <td>riswan</td>
                                <td><a href="#" class="btn btn-primary m-2">Edit</a><a href="#" class="btn btn-danger m-2">Hapus</a></td>
                            </tr>
                            <tr>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <h1>Manage Tempat Magang</h1>
                <a href="dudi/add_dudi.php" class="btn btn-success my-2">Tambah</a>
                <div class="mading">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tempat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>PT Abadi</td>
                                <td><a href="#" class="btn btn-primary m-2">Edit</a><a href="#" class="btn btn-danger m-2">Hapus</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php 
        include 'footer.php'
    ?>