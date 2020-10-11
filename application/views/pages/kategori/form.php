<div class="card">
    <div class="card-body">
        <?php
        echo form_open('administrator/kategori/simpan');
        ?>

        <div class="form-group row">
            <label class="col-3">Kategori</label>
            <div class="col-9">
                <?php
                $data = [
                    'type' => 'text',
                    'name' => 'kategori',
                    'class' => 'form-control'
                ];
                echo form_input($data);
                ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Tipe</label>
            <div class="col-9">
                <?php
                $data = [
                    'type' => 'text',
                    'name' => 'tipe',
                    'class' => 'form-control'
                ];
                echo form_input($data);
                ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Keterangan</label>
            <div class="col-9">
                <?php
                $data = [
                    'name' => 'keterangan',
                    'class' => 'form-control'
                ];
                echo form_textarea($data);
                ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Status</label>
            <div class="col-9">
                <?php
                $status = [
                    'aktif' => 'Aktif',
                    'tidak aktif' => 'Tidak Aktif',
                    'hapus' => 'Hapus'
                ];
                $data = [
                    'name' => 'keterangan',
                    'class' => 'form-control'
                ];
                echo form_dropdown($data, $status);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group row">
                <div class="col-9">
                    <?php
                    $data = [
                        'name' => 'submit',
                        'class' => 'form-control'
                    ];
                    echo form_submit($data);
                    ?>
                </div>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>