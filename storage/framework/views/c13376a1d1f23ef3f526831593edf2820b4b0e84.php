<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PICASSO | About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="<?php echo e(url('/assets/frontend/css/styleAbout.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/assets/frontend/css/style.css')); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body id="home-picart">
    <div class="home">
    <section class="section-home">
    <div class="nav-home">
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <ul>
                <li> <a href="<?php echo e(url('/home')); ?>"><b>Home</b></a> </li>
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
				<?php else: ?>
				<ul>
                    <li> <a href="<?php echo e(url('/home')); ?>">Home</a> </li>
                    <li> <a href="<?php echo e(url('/feed')); ?>">Feed</a> </li>
                    <li> <a href="<?php echo e(url('/preset')); ?>">Presets</a> </li>
                    <li> <a class="sign" href="<?php echo e(route('login')); ?>">Sign in</a> </li>
                    <?php if(Route::has('register')): ?>
                    <li> <a class="sign" href="<?php echo e(route('register')); ?>">Sign up</a> </li>
                </ul>
                <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <h1 class="pagetitle">ABOUT</h1>
        <h2 class="pagedes">Find out everything about me and my team.</h2>
        </section>
     </div>
        
    </div>
    <div class="section1">
        <div class="section1izq">
            <h1 class="sectiontitle">BIOGRAPHY</h1>
            <p class="paragraph">
                My name is Walker Evans but I could introduce myself by saying
                that I’m a madman passionate about photography.<br><br>
                I started my career studying the audiovisual career at Oxford
                University, that’s when I really felt that my passion was photography.<br><br>
                I have a total of fifteen years dedicated to photography professionally
                and about three years at first as an amateur participating in
                competitions and working autonomously for restaurants and clothing
                brands.<br><br>
                </p>
        </div>
        <div class="section1der"></div>
    </div>
    <div class="section2">
        <h2 class="section2title">MY EQUIPMENT</h2>
        <p class="section2paragraph">
            While the essential ingredient for great photography is yourself, having a good team of targets
            will make things a lot easier for you.<br><br>
            Putting together a good team to accompany you photo by photo as you walk your way into
            the world of digital photography is not as simple as it seems, as there are hundreds of models,
            brands and technical aspects to consider, here I leave mine.
        </p>
        <div class="section2container">
            <div class="section2camera">
                <div class="cameraimg"></div>
                <p class="containertext">
                    <span>CANON EOS 5D MARK III</span><br><br>
                    <span>General description</span><br><br>
                    Full format sensor and 22,3 megapixels.<br><br>
                    Continuous shots of 6 fps.<br><br>
                    Video full HD with manual control.<br><br>
                </p>
            </div>
            <div class="section2objective">
                <div class="objectiveimg"></div>
                <p class="containertext">
                    <span>OBJECTIVES</span><br><br>
                    <span>Canon 50m f/1.8 II</span><br><br>
                    <span>Canon 17-55mm f/2.8 EF-S IS USM</span><br><br>
                    <span>Canon EF 200mm f/2.8L II USM</span><br><br>
                    <span>Canon EF 100mm f/2.8 USM Macro</span><br><br>
                </p>
            </div>
        </div>
    </div>
    <div class="section3">
        <div class="section3izq"></div>
        <div class="section3der">
            <h1 class="sectiontitle">MY AWARDS</h1>
            <p class="paragraph">
                Throughout my professional career I have been able to
                participate in various competitions that have been held
                all over the world, to publicize my personal brand and
                to learn from each and every one of my rivals.<br><br>
                My highest recognition is a third prize in an international
                photography competition in the urban area in which a
                total of two million photographers participated, most of
                them professionals who have many years of dedication
                behind them.<br><br>                
                </p>
        </div>
    </div>
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
                    <p>© PICASSO 2021. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\proyectofinal\resources\views/frontend/about/about.blade.php ENDPATH**/ ?>