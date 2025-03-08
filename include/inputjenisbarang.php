
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">input Jenis Barang</h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Jenis Barang</h6>
                                </div>
                                <div class="card-body">
                                    
                                    <p>Masukan Data Yang Benar</p>

                                <form role="form" class="margin-top-20" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'];?>">
                                    <?php
                                        if(isset($_POST['btnSimpan'])){

                                        $cek ="INSERT INTO tb_jenis (nama_jenis) VALUES (:nama)";
                                        $simpan=$pdo->prepare("$cek");
                                        $hasil=$simpan->execute(array(
                                            ':nama' => $_POST['txtNama']
                                            ));
                                        
                                        if($hasil){
                                            echo "<div class='alert alert-into'><strong>Success!</strong> Data berhasil di input</div><meta http-equiv='refresh' content='1; url= index.php?page=inputjenisbarang'/>";
                                            }else{
                                            echo "<div class='alert alert-danger'><strong>Error! </strong> Data Gagal Ditambahkan !</div>";
                                            }
                                        }
                                        ?>

                                    <label>Nama Jenis</label>
                                    <input type="text" class="form-control" name="txtNama" placeholder="Masukan Nama Jenis Barang">
                                    <br>

                                    <button type="submit" name="btnSimpan" class="btn btn-success btn-circle btn-sm">
                                        <i class="fas fa-save"></i>
                                    </button>

                                    <button type="reset" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                
                                </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->