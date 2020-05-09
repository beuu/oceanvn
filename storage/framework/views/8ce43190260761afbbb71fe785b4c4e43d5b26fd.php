<?php $__env->startSection('meta'); ?>

<title>hihih &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <?php echo $cate->content; ?>

            
        </div>
    </div>
    <div class="container" style="padding:30px 0px">
        <p style="text-align:center; font-size:20pt">Liên hệ</p>
    <form action="<?php echo e(route('lienhep')); ?>" method="POST">
        <?php if(session('success')): ?>
                    	<div class="flash-message">
                        <div class="alert alert-success">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <?php echo e(session('success')); ?>

                        </div>
                        </div>
                    <?php endif; ?>
        <?php echo e(csrf_field()); ?>

                    <div class="row animate-box">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Hãy để lại lời nhắn với chúng tôi"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Gửi" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
                
            <?php if(!empty($data) && $data != null): ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-4 col-sm-6" style="height:500px">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="<?php echo e(asset("/storage/")); ?>/<?php echo e($item->image); ?>" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                        <h3><a href="#"><?php echo e($item->name); ?></a></h3>
                            <span class="posted_by"><?php echo e($item->created_at); ?></span>
                            
                            <p><?php echo e($item->excerpt); ?></p>
                        <p><a href="<?php echo e(route('baiviet',[$item->category->slug, $item->slug ])); ?>">Xem thêm...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="clearfix visible-sm-block"></div>
            <div class="clearfix visible-md-block"></div>
            
        </div>
        <div class="row">
            <?php echo $data->links(); ?>

        </div>

    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>