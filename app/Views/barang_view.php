<div class="container pt-5">
    <a href="<?= base_url('karyawan/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title">Data Karyawan</h4>
        </div>
        <div class="container pt-3">
            <form action="<?= base_url('karyawan/search');?>" method="post" class="form-inline mb-2">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="keyword" class="sr-only">Nama Karyawan</label>
                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari Nama Karyawan">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Cari</button>
            </form>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Karyawan</th>
                            <th>Jam Kerja</th>
                            <th>Posisi</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getBarang as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_barang'];?></td>
                                <td><?= $isi['qty'];?></td>
                                <td><?= $isi['harga_beli'];?></td>
                                <td>Rp<?= number_format($isi['harga_jual']);?>,-</td>
                                <td>
                                    <a href="<?= base_url('karyawan/edit/'.$isi['id_barang']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('karyawan/hapus/'.$isi['id_barang']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data karyawan ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>