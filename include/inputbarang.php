
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">input Barang</h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                                </div>
                                <div class="card-body">
                                    
                                    <p>Masukan Data Yang Benar</p>

                                <form role="form" class="margin-top-20" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'];?>">
                                    <?php

                                        try {
                                            $queryJenis = "SELECT id_jenis, nama_jenis FROM tb_jenis";
                                            $jenis = $pdo->prepare("$queryJenis");
                                            $jenis->execute();
                                            $jenisBarang = $jenis->fetchALL(PDO::FETCH_ASSOC);
                                        } catch (pdoException $e) {
                                            echo "<div class='alert alert-danger'><strong>Error!</storng>". $e->getMessage(),"</div>";
                                        }
                                        
                                            if(isset($_POST['btnSimpan'])){
                                                $harga_beli = $_POST['txtHargaBeli'];
                                                $harga_jual = $_POST['txtHargaJual'];


                                                if ($harga_beli > $harga_jual){
                                                    echo "<div class='alert alert-danger'><strong>Error!</storng> HARGA BELI TIDAK BOLEH KURANG DARI HARGA JUAL </div><meta http-equiv='refresh' content='1'; url=index.php?page=inputbarang'/
                                                    >";

                                                } else{

                                                    $cek ="INSERT INTO tb_barang (nama_barang, id_jenis, harga_beli, harga_jual, stok) VALUES (:nama, :id_jenis, :hargabeli, :hargajual, :stok)";
                                                    $simpan=$pdo->prepare("$cek");
                                                    $hasil=$simpan->execute(array(
                                                        ':nama' => $_POST['txtNama'],
                                                        ':id_jenis' => $_POST['txtJenis'],
                                                        ':hargabeli' => $harga_beli,
                                                        ':hargajual' => $harga_jual,
                                                        ':stok' => $_POST['txtStok'],
                                                    ));
                                            
                                            if($hasil){
                                                echo "<div class='alert alert-into'><strong>Success!</strong> Data berhasil di input</div><meta http-equiv='refresh' content='1; url= index.php?page=inputbarang'/>";
                                                }else{
                                                    echo "<div class='alert alert-danger'><strong>Error! </strong> Data Gagal Ditambahkan !</div>";
                                                }
                                            }
                                        }
                                            ?>

                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="txtNama" placeholder="Masukan Nama Jenis Barang" required>
                                    <br>

                                    <label>Jenis Barang</label> 
                                    <select class="form-control" name="txtJenis" required>
                                        <option value="">-- Pilih Jenis Barang --</option>
                                        <?php foreach ($jenisBarang as $jenis) :?>
                                        <option value="<?=$jenis['id_jenis'];?>"><?= $jenis['nama_jenis']; ?></option>"
                                        <?php endforeach; ?>
                                    </select>
                                    <br>

                                    <label>Harga Beli</label>
                                    <input type="number" class="form-control" name="txtHargaBeli" placeholder="Masukan Nama Jenis Barang" required>
                                    <br>

                                    <label>Harga Jual</label>
                                    <input type="number" class="form-control" name="txtHargaJual" placeholder="Masukan Nama Jenis Barang" required>
                                    <br>

                                    <label>Stok</label>
                                    <input type="number" class="form-control" name="txtStok" placeholder="Masukan Nama Jenis Barang" required>
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
