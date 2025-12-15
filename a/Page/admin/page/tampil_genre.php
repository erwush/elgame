<div class="row">
    <div class="table-responsive">
        <table class="table table-hover table-bordered mb-0">
            <thead class="table-light">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>name</th>
                    <th style="width: 150px;">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php if (isset($genres) && !empty($genres)) : ?>
                <?php foreach ($genres as $genre) : ?>
                    <tr>
                        <td><?= $genre['id'] ?></td>
                        <td><?= $genre['name'] ?></td>
                        <td>
                            <a href="?page=genre&action=edit&id=<?= $genre['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="?page=genre&action=delete&id=<?= $genre['id'] ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin hapus data ini?');">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td class="text-center" colspan="3">Data Kosong</td>
                </tr>
            <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>
