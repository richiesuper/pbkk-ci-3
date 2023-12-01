<div class="container p-5">
    <a href="<?= base_url('karyawan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title">Edit Karyawan : <?= $barang->nama_barang;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('karyawan/update');?>">
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" value="<?= $barang->nama_barang;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jam Kerja</label>
                    <input type="number" value="<?= $barang->qty;?>" name="qty" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Posisi</label>
                    <input type="text" value="<?= $barang->harga_beli;?>" name="beli" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Gaji</label>
                    <input type="number" value="<?= $barang->harga_jual;?>" name="jual" required class="form-control">
                </div>
                <input type="hidden" value="<?= $barang->id_barang;?>" name="id_barang">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>