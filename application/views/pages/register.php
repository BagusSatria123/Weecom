<div class="container">
    <div class="row h-75 align-items-center">
        <div class="col-md-6">
            <h2>Sistem Perusahaan Weecom</h2>
            <h3>Pengelolaan karyawan dan digital absensi</h3>
            <div class="akses-button">
                <?php
                $dataAnchor = ['class' => 'btn btn-outline-primary'];
                $dataAnchor = ['class' => 'btn btn-outline-primary mr-2'];
                echo anchor('login', 'LOGIN', $dataAnchor);
                $dataAnchor = ['class' => 'btn btn-outline-primary mr-2 active'];
                echo anchor('register', 'REGISTER', $dataAnchor);
                ?>
            </div>
        </div>
        <div class="col-md-6 mt-5 mb-5">
            <div class="card frame-form-weecom">
                <div class="card-header">Daftar Interview</div>
                <div class="card-body">
                    <?php
                    echo form_open(base_url('register/proses'), ['class' => 'form-weecom']);
                    ?>
                    <div class="form-group row">
                        <label for="nama_depan" class="col-3">Nama Depan</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'nama_depan',
                                'id' => 'nama_depan',
                                'class' => 'form-control',
                                'value' => set_value('nama_depan'),
                                'placeholder' => 'Nama Depan'
                            ];
                            echo form_input($data);
                            echo form_error('nama_depan');
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_belakang" class="col-3">Nama Belakang</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'nama_belakang',
                                'id' => 'nama_belakang',
                                'class' => 'form-control',
                                'value' => set_value('nama_belakang'),
                                'placeholder' => 'Nama Belakang'
                            ];
                            echo form_input($data);
                            echo form_error('nama_belakang');

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-3">Email</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'email',
                                'id' => 'email',
                                'class' => 'form-control',
                                'value' => set_value('email'),
                                'placeholder' => 'Email'
                            ];
                            echo form_input($data);
                            echo form_error('email');

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dob" class="col-3">Tanggal Lahir</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'dob',
                                'id' => 'dob',
                                'class' => 'form-control',
                                'value' => set_value('dob'),
                                'placeholder' => 'Tanggal Lahir'
                            ];
                            echo form_input($data);
                            echo form_error('dob');

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-3">Alamat</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'alamat',
                                'id' => 'alamat',
                                'class' => 'form-control',
                                'value' => set_value('alamat'),
                                'placeholder' => 'Alamat'
                            ];
                            echo form_input($data);
                            echo form_error('alamat');

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor_telepon" class="col-3">Nomor Telepon</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'nomor_telepon',
                                'id' => 'nomor_telepon',
                                'class' => 'form-control',
                                'value' => set_value('nomor_telepon'),
                                'placeholder' => 'Masukkan nomor telepon rumah Anda'
                            ];
                            echo form_input($data);
                            echo form_error('nomor_telepon');

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor_hp" class="col-3">Nomor HP</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'nomor_hp',
                                'id' => 'nomor_hp',
                                'class' => 'form-control',
                                'value' => set_value('nomor_hp'),
                                'placeholder' => 'Nomor HP'
                            ];
                            echo form_input($data);
                            echo form_error('nomor_hp');

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-3">Jenis Kelamin</label>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-4">
                                    <label class="radio-inline">
                                        <?php
                                        $data = [
                                            'name' => 'jenis_kelamin',
                                            'id' => 'jenis_kelamin',
                                            'checked' => set_radio('jenis_kelamin', 'Wanita')
                                        ];
                                        echo form_radio($data, 'Wanita');

                                        ?>
                                        Wanita
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="radio-inline">
                                        <?php
                                        $data = [
                                            'name' => 'jenis_kelamin',
                                            'id' => 'jenis_kelamin',
                                            'checked' => set_radio('jenis_kelamin', 'Pria')
                                        ];
                                        echo form_radio($data, 'Pria');
                                        ?>
                                        Pria
                                    </label>
                                </div>
                            </div>
                            <?php echo form_error('jenis_kelamin'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-3">Password</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'password',
                                'id' => 'password',
                                'class' => 'form-control',
                                'placeholder' => 'Password'
                            ];
                            echo form_password($data);
                            echo form_error('password');
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="konfirmasi_password" class="col-3">Konfirmasi Password</label>
                        <div class="col-9">
                            <?php
                            $data = [
                                'name' => 'konfirmasi_password',
                                'id' => 'konfirmasi_password',
                                'class' => 'form-control',
                                'placeholder' => 'Konfirmasi Password Kamu dulu'
                            ];
                            echo form_password($data);
                            echo form_error('konfirmasi_password');

                            ?>
                        </div>
                    </div>
                    <?php
                    echo form_submit(['name' => 'submit', 'class' => 'btn btn-dark btn-block'], 'Register');
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>