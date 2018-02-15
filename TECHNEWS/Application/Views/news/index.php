<?php

$params = $this->getViewparams();
$article   = $params['articles'];
$spotlight  = $params['spotlight'];
?>
<div class="row">
    <!--colleft-->
    <div class="col-md-8 col-sm-12">
        <div class="box-caption">
            <span>spotlight</span>
        </div>
        <!--sportlight-->
        <section class="owl-carousel owl-spotlight">
            <?php foreach ($spotlight as $slide) { ?>
            <div>
                <article class="spotlight-item">
                    <div class="spotlight-img">
                        <img alt="<?= $slide->getTITREARTICLE() ?>" src="<?= PATH_PUBLIC ?>images/product/<?= $slide->getFEATUREDIMAGEARTICLE(); ?>" class="img-responsive" />
                        <a href="#" class="cate-tag"><?= $slide->getCATEGORIEOBJ()->getLIBELLECATEGORIE(); ?></a>
                    </div>
                    <div class="spotlight-item-caption">
                        <h2 class="font-heading">
                            <a href="#">
                                <?= $slide->getTITREARTICLE(); ?>
                            </a>
                        </h2>
                        <div class="meta-post">
                            <a href="#">
                                <?= $slide->getAUTEUROBJ()->getNOMCOMPLET(); ?>
                            </a>
                            <em></em>
                            <span>
							<time datetime="<?= $slide->getDATECREATIONARTICLE()?>"></time>
						</span>
                        </div>
                        <p><?= $slide->getACCROCHEARTICLE(); ?> </p>
                    </div>
                </article>
            </div>
            <?php }?>


        </section>

        <!--spotlight-thumbs-->
        <section class="spotlight-thumbs">
            <div class="row">
                <?php foreach ($article as $article){?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#">
                                <img alt="<?= $article->getTITREARTICLE()?>" src="<?=PATH_PUBLIC ?>images/product/<?=  $article->getFEATUREDIMAGEARTICLE()?>" />
                            </a>
                            <a href="#" class="cate-tag"><?= $article->getCATEGORIEOBJ()->getLIBELLECATEGORIE()?></a>
                        </div>
                        <h3><a href="#"><?= $article->getTITREARTICLE() ?></a></h3>
                        <div class="meta-post">
                            <a href="#">
                              <?= $article->getAUTEUROBJ()->getNOMCOMPLET()?>
                            </a>
                            <em></em>
                            <span>
							<time datetime="<?= $article->getDATECREATIONARTICLE()?>"></time>
						</span>
                        </div>
                    </div>
                </div>
              <?php  }?>
            </div>
        </section>
    </div>
    <?php include PATH_SIDEBAR; ?>