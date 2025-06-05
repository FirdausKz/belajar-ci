<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


    <h3 class="mb-4">Profil Pengguna</h3>
    <div class="card">
        <div class="">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Username:</strong> <?= esc($username) ?>
                </li>
                <li class="list-group-item">
                    <strong>Role:</strong> <?= esc($role) ?>
                </li>
                <li class="list-group-item">
                    <strong>Email:</strong> <?= esc($email) ?>
                </li>
                <li class="list-group-item">
                    <strong>Waktu Login:</strong> <?= esc($login_time) ?>
                </li>
                <li class="list-group-item">
                    <strong>Status Login:</strong> <?= esc($status) ?>
                </li>
            </ul>
        </div>
    </div>


<?= $this->endSection() ?>