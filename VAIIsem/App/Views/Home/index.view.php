<?php /** @var Array $data */ ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-start flex-wrap">
            <?php foreach ($data['shelters'] as $shelter) { ?>
                <div class="card" style="width: 18rem; margin: 5px">
                    <img src="<?= \App\Config\Configuration::UPLOAD_DIR . $shelter->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="?c=home&a=addLike&postid=<?= $shelter->getId() ?>" class="btn btn-primary">
                            <?= $shelter->getLikes() ?>
                            <i class="bi bi-hand-thumbs-up"></i>
                        </a>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
