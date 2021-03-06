<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PICASSO</title>
    
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="<?php echo e(url('/assets/frontend/css/style.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" type="png" href="<?php echo e(url('/assets/logo.png')); ?>" />
    <!-- 1. Add latest jQuery and fancybox files -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


       
  </head>
  <body id="singlepreset-picart">
    
      
          <div class="nav-home">
               <h1 class="picart">PICASSO</h1>
            <ul>
                <li> <a href="<?php echo e(url('/home')); ?>">Home</a> </li>
                <li> <a href="<?php echo e(url('/feed')); ?>">Feed</a> </li>
                <li> <a href="<?php echo e(url('/preset')); ?>">Presets</a> </li>
                <li> <a href="" class="menuitem"><?php echo e(Auth::user()->name); ?></a> 
                    <ul>
						<li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-2x"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg><a href="<?php echo e(url('/admin')); ?>">My account</a></li>
						<li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-image fa-w-16 fa-2x"><path fill="currentColor" d="M464 448H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v288c0 26.51-21.49 48-48 48zM112 120c-30.928 0-56 25.072-56 56s25.072 56 56 56 56-25.072 56-56-25.072-56-56-56zM64 384h384V272l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L208 320l-55.515-55.515c-4.686-4.686-12.284-4.686-16.971 0L64 336v48z" class=""></path></svg><a href="<?php echo e(url('/myphotos')); ?>">My photos</a></li>
						<li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magic" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-magic fa-w-16 fa-2x"><path fill="currentColor" d="M224 96l16-32 32-16-32-16-16-32-16 32-32 16 32 16 16 32zM80 160l26.66-53.33L160 80l-53.34-26.67L80 0 53.34 53.33 0 80l53.34 26.67L80 160zm352 128l-26.66 53.33L352 368l53.34 26.67L432 448l26.66-53.33L512 368l-53.34-26.67L432 288zm70.62-193.77L417.77 9.38C411.53 3.12 403.34 0 395.15 0c-8.19 0-16.38 3.12-22.63 9.38L9.38 372.52c-12.5 12.5-12.5 32.76 0 45.25l84.85 84.85c6.25 6.25 14.44 9.37 22.62 9.37 8.19 0 16.38-3.12 22.63-9.37l363.14-363.15c12.5-12.48 12.5-32.75 0-45.24zM359.45 203.46l-50.91-50.91 86.6-86.6 50.91 50.91-86.6 86.6z" class=""></path></svg><a href="<?php echo e(url('/mypresets')); ?>">My presets</a></li>
						<li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16 fa-2x"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" class=""></path></svg><a href="<?php echo e(url('/mylikes')); ?>">Likes</a></li>
						<li><svg style="width:10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-bookmark fa-w-12 fa-2x"><path fill="currentColor" d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z" class=""></path></svg><a href="<?php echo e(url('/myfavourites')); ?>">Saved Presets</a></li>
						<li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-bag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-shopping-bag fa-w-14 fa-9x"><path fill="currentColor" d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z" class=""></path></svg><a href="<?php echo e(url('/myshopping')); ?>">My shopping</a></li>
						
						<?php if(0 == Auth::user()->rol): ?>
						<li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-crown" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user-crown fa-w-14 fa-2x"><path fill="currentColor" d="M352 0l-64 32-64-32-64 32L96 0v96h256V0zm-38.4 304h-16.71c-22.24 10.18-46.88 16-72.89 16s-50.65-5.82-72.89-16H134.4C60.17 304 0 364.17 0 438.4V464c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48v-25.6c0-74.23-60.17-134.4-134.4-134.4zM224 272c70.69 0 128-57.31 128-128v-16H96v16c0 70.69 57.31 128 128 128z" class=""></path></svg><a href="<?php echo e(url('/backend')); ?>">Administration</a></li>
						<?php endif; ?>
						<!--<li><a href="">Add photo</a></li>-->
						<!--<li><a href="">Add preset</a></li>-->
						<li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-sign-out-alt fa-w-16 fa-2x"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z" class=""></path></svg>
						<a href="<?php echo e(route('logout')); ?>" 
						                    onclick="event.preventDefault(); 
						                    document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?></a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
					</ul> </li>
                <!--<li> <a class="sign" href="">Sign in</a> </li>-->
                <!--<li> <a class="sign" href="">Sign up</a> </li>-->
            </ul>
            
        </div>
               
        <section class="section-single">
            
            <div class="container container-single" >
                <div class="row row-single" >
                    <div class="col-12">
                      <h1> <b>PICASSO</b>  ??? For <?php echo e($preset->user->name); ?></h1>
                    </div>
                    <div class="col-7">
                        <div class="single-feed">
                            <div class="item">
                                <p><?php echo e($preset->created_at); ?></p>
                                <a data-fancybox="gallery" href="data:image/png;base64,<?php echo e($preset->photo); ?>"><img src="data:image/png;base64,<?php echo e($preset->photo); ?>"></a>
                                <div class="save">
                                   
                                     <?php if( $presetfavourites != null ): ?>
                                        <a href=" <?php echo e(url('/delete/favourite/'.  $presetfavourites[0]->id .'/'. $preset->id.'/'.$preset->iduser )); ?>" class="favorite"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-bookmark fa-w-12 fa-9x"><path fill="currentColor" d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z" class=""></path></svg></a>
                                          
                                 	<?php else: ?>
                    				     <!--<a href="" class="favorite"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16 fa-9x"><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z" class=""></path></svg></a>-->
                    				     <form role="form" action="<?php echo e(url('/home/presets/favourite')); ?>" method="post" id="createLikeForm" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                                   
                                                    <select style="display:none" name="iduser" id="iduser" required class="form-control">
                                                        <option value="<?php echo e(Auth::user()->id); ?>" selected><?php echo e(Auth::user()->id); ?></option>
                                                    </select>
                                                    <select style="display:none" name="idpreset" id="idpreset" required class="form-control">
                                                        <option value="<?php echo e($preset->id); ?>" selected><?php echo e($preset->id); ?></option>
                                                    </select>
                                                   
                                                <button type="submit" style="border: none; background: transparent;" class="favorite"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-bookmark fa-w-12 fa-9x"><path fill="currentColor" d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm0 428.43l-144-84-144 84V54a6 6 0 0 1 6-6h276c3.314 0 6 2.683 6 5.996V428.43z" class=""></path></svg></button>
                                        </form>
                    				  
                                       
                    				<?php endif; ?>
                                    
                                    <!--<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-bookmark fa-w-12 fa-9x"><path fill="currentColor" d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z" class=""></path></svg>-->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="features">
                            <h2>Preset</h2>
                            <div class="carct"><h3>Name</h3> <h4><?php echo e($preset->name); ?></h4></div>
                            <div class="carct"><h3>Description</h3> <h4><?php echo e($preset->description); ?></h4></div>
                            <div class="carct carctend"><h3>Price</h3> <h4><?php echo e($preset->price); ?> $</h4></div>
                            <?php if($preset->iduser == Auth::user()->id): ?>
                              <div class="edit-a"><a class="delete-feature" href="<?php echo e(url('/home/presets/' . $preset->id . '/delete')); ?>">Delete</a><a href="<?php echo e(url('/home/presets/' . $preset->id . '/edit')); ?>">Edit Preset</a></div>
                            <?php else: ?>
                               <a href="<?php echo e(url('presets/cart/' . $preset->id)); ?>" class="buy-cart">Buy</a>
                               <?php endif; ?>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        
    </section>
    <section class="comment-single">
            
            <div class="container container-comment" >
                <div class="row row-comment" >
                    <div class="col-12">
                        <h3>VALUATIONS</h3>
                        <?php $__currentLoopData = $valuations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valuation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="comment">
                             <div class="icon-user"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-9x"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg></div>
                             <div class="text-comment">
                                 <h5><?php echo e($valuation->username); ?></h5>
                                     <?php if($valuation->valuation == 1): ?>
                                             <div class="star">
                                            <span class="checked">??? </span>
                                            <span >??? </span>
                                            <span >??? </span>
                                            <span class="">??? </span>
                                            <span class="">??? </span>
                                            </div>
                                    <?php elseif( $valuation->valuation == 2): ?>
                                         <div class="star">
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span >??? </span>
                                            <span class="">??? </span>
                                            <span class="">??? </span>
                                            </div>
                                     <?php elseif( $valuation->valuation == 3): ?>
                                         <div class="star">
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="">??? </span>
                                            <span class="">??? </span>
                                            </div>
                                      <?php elseif( $valuation->valuation == 4): ?>
                                         <div class="star">
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="">??? </span>
                                            </div>   
                                      <?php elseif( $valuation->valuation == 5): ?>
                                         <div class="star">
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            <span class="checked">??? </span>
                                            </div>     
                                        <?php else: ?>
                                        <div class="star">
                                            <span >??? </span>
                                            <span >??? </span>
                                            <span >??? </span>
                                            <span class="">??? </span>
                                            <span class="">??? </span>
                                            </div>
                                        <?php endif; ?>
                                 <h6><?php echo e($valuation->text_valuation); ?></h6>
                                
                             </div>
                             <?php if($preset->iduser == Auth::user()->id): ?>
                                     <a href="<?php echo e(url('valuation/'. $valuation->idvaluation . '/delete')); ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-trash fa-w-14 fa-9x"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" class=""></path></svg></a>
                              <?php elseif($valuation->iduservaluation == Auth::user()->id): ?>
                                   <a href="<?php echo e(url('valuation/'. $valuation->idvaluation . '/delete')); ?>"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-trash fa-w-14 fa-9x"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" class=""></path></svg></a>
                              <?php endif; ?>
                         </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                         <!--<div class="comment">-->
                         <!--    <div class="icon-user"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-9x"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg></div>-->
                         <!--    <div class="text-comment">-->
                         <!--        <h5>FelipeCaraPapa</h5>-->
                         <!--        <div class="star">-->
                         <!--           <span class=" checked">??? </span>-->
                         <!--           <span class="checked">??? </span>-->
                         <!--           <span class="checked">??? </span>-->
                         <!--           <span class="">??? </span>-->
                         <!--           <span class="">??? </span>-->
                         <!--           </div>-->
                         <!--        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>-->
                         <!--    </div>-->
                         <!--</div>-->
                    </div>

                </div>
            </div>
        
    </section>
    
    <section class="comment-form">
            
            <div class="container container-form" >
                <div class="row row-form" >
                    <div class="col-12 col-form">
                        <h1>WRITE A <b>VALUATION</b> </h1>
                        
                        <form role="form" action="<?php echo e(url('valuation/'. $preset->id)); ?>" method="post" id="createValuationForm" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="text" maxlength="1000" minlength="1" required class="form-control" id="iduser" placeholder="User" name="iduser" value="<?php echo e(Auth::user()->id); ?>" style="display:none">
                            <input type="text" maxlength="1000" minlength="1" required class="form-control" id="idpreset" placeholder="Preset" name="idpreset" value="<?php echo e($preset->id); ?>" style="display:none">
                            <div class="rate">
                                <input  type="radio" id="star5"  value="5" name="valuation" id="valuation"/>
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4"  value="4" name="valuation" id="valuation"/>
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" value="3" name="valuation" id="valuation"/>
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2"  value="2" name="valuation" id="valuation"/>
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" value="1" name="valuation" id="valuation"/>
                                <label for="star1" title="text">1 star</label>
                          </div>
                          
                          <textarea placeholder="Valuation" name="text_valuation" id="text_valuation"><?php echo e(old('text_valuation')); ?></textarea>
                          <input type="submit" value="Submit">
                        </form> 
                    </div>

                </div>
            </div>
        
    </section>
      <footer>
        <div class="container container-footer" >
            <div class="row row-footer" >
            <div class="col-4 col-footer-menu">
                  <ul>
                      <li> <b>Menu</b> </li>
                      <li> <a href="<?php echo e(url('/')); ?>">Home</a> </li>
                      <li> <a href="<?php echo e(url('/feed')); ?>">Feed</a> </li>
                      <li> <a href="<?php echo e(url('/preset')); ?>">Presets</a> </li> 
                  </ul>
                  <ul>
                      <li> <b>Company</b> </li>
                      <li> <a href="<?php echo e(url('/about')); ?>">About us</a> </li>
                  </ul>
                </div>
                <div class="col-4 col-logo-footer">
                    <h2>PICASSO</h2>
                </div>
                
                <div class="col-4 col-copy">
                    <p>?? PICASSO 2021. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
   


</body>
</html>
<?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/frontend/preset/singlepreset.blade.php ENDPATH**/ ?>