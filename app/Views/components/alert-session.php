<?php if (session()->getFlashdata('success')): ?>
    <?php $successMessages = session()->getFlashdata('success'); ?>
    <?php if (is_array($successMessages)): ?>
        <?php foreach ($successMessages as $succes): ?>
            <div class="alert alert-success alert-dismissible fade show " role="alert">
                <p><?= esc($succes) ?></p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="alert alert-success alert-dismissible fade show " role="alert">
            <p><?= esc($successMessages) ?></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
<?php elseif (session()->getFlashdata('errors')): ?>
    <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <div class="alert alert-danger alert-dismissible fade show " role="alert">
            <p><?= esc($error) ?></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
