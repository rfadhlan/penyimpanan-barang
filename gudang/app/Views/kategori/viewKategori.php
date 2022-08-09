<?= $this->extend('main/layout'); ?>

<!-- Judul -->
<?= $this->section('judul'); ?>
Menu Kategori
<?= $this->endSection('judul'); ?>

<!-- Sub Judul -->
<?= $this->section('subjudul'); ?>

<?= form_button('', '<i class="fa fa-plus-circle"></i> Tambah Data', [
    'class' => 'btn btn-primary',
    'onclick' => "location.href=('" . site_url('kategori/formTambah') . "')"
]); ?>

<?= $this->endSection('subjudul'); ?>

<!-- Isi -->
<?= $this->section('isi'); ?>

<table class="table table-striped table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th style="width: 5%;">No</th>
            <th>Nama Kategori</th>
            <th style="width: 15%;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $nomor = 1;
        foreach ($tampildata as $row) :
        ?>

            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $row['katnama']; ?></td>
                <td>

                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection('isi  '); ?>