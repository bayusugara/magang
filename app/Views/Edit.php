<?= $this->extend('static'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title"><?= $title; ?></h4><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
        <form class="form-horizontal group-border-dashed" method="post" action="/home/simpan">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nim</label>
                <div class="col-sm-4">
                    <input type="text" name="nim" class="form-control" value="<?= $edit['nim'];?>" required placeholder="Nim" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control" value="<?= $edit['nama'];?>" required placeholder="nama" />
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-sm-3 control-label">Fakultas</label>
                <div class="col-sm-4">
                    <select id="fakultas" name="fakultas" class="selectpicker" data-live-search="true" data-style="btn-white" required>
                    <option value="">Pilih Fakultas</option>
                        <?php foreach ($fak as $f) { ?>
                            <option value="<?= $f->id_fakultas;?>"><?= $f->nama; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Jurusan</label>
                <div class="col-sm-4">
                <select name="jurusan" id="jurusan" class="selectpicker" data-live-search="true" data-style="btn-white" required>
                    <option>Pilih Jurusan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Kelas</label>
                <div class="col-sm-4">
                <select name="kelas" id="kelas" class="selectpicker" data-live-search="true" data-style="btn-white" required>
                    <option>Pilih Kelas</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                    <a href="/home" class="btn btn-default m-l-5">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>