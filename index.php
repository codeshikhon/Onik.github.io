<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="profile" href="https://gmpg.org/xfn/11">

   <title>Responsive HTML Template - Single Post</title>

   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
    
      <?php do_action( 'my_action' ); ?>
      
      <header id="masthead" class="site-header">
         <div class="container">
            <div class="site-branding">
               <?php
               if( the_custom_logo() ){
                  the_custom_logo();
               } else {
                  echo '<h1 class="site-title">' . get_bloginfo( 'name') . '</h1>';
               } 
                ?>
            </div>

            <button id="menu-toggle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg></button>

            <?php
            //<span class="dropdown-menu-toggle"></span>
               wp_nav_menu(
                  array(
                     'theme_location'  => 'Header Menu',
                     'container'  => 'nav',
                     'container_class'      => 'site-navigation',
                     'container_id'         => 'main-navigation',
                     
                  )
               );
            ?>

            
         </div>
      </header><!-- #masthead -->

      <div id="content" class="site-content">
         <div class="container">
            <div id="primary" class="content-area">
               <main id="main" class="site-main">
                  <article class="post">
                     <div class="entry-header">
                        <h2 class="entry-title"><a href="#" rel="bookmark">Hello world!</a></h2>
                        <div class="entry-meta">
                           <span class="posted-on">Posted on <a href="#" rel="bookmark"><time class="entry-date published" datetime="2022-01-21T08:24:19+00:00">January 21, 2022</time><time class="updated" datetime="2022-02-01T20:03:29+00:00">February 1, 2022</time></a></span><span class="byline">by <span class="author vcard"><a class="url fn n" href="#">admin</a></span></span>
                        </div>
                     </div><!-- .entry-header -->

                     <div class="entry-content">
                        <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
                     </div><!-- .entry-content -->

                     <div class="entry-footer">
                        <span class="cat-links">Posted in <a href="#" rel="category tag">Uncategorized</a></span><span class="comments-link"><a href="#">1 Comment<span class="screen-reader-text"> on Hello world!</span></a></span><span class="edit-link"><a class="post-edit-link" href="#">Edit <span class="screen-reader-text">Hello world!</span></a></span>
                     </div><!-- .entry-footer -->
                  </article>

                  <article class="post">
                     <div class="entry-header">
                        <h2 class="entry-title"><a href="#" rel="bookmark">Block: Image</a></h2>
                        <div class="entry-meta">
                           <span class="posted-on">Posted on <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2018-11-03T15:20:00+00:00">November 3, 2018</time></a></span><span class="byline">by <span class="author vcard"><a class="url fn n" href="#">Theme Reviewer</a></span></span>
                        </div>
                     </div><!-- .entry-header -->

                     <div class="entry-content">
                        <p>Welcome to image alignment! If you recognize this post, it is because these are blocks that have been converted from the classic Markup: Image Alignment post. The best way to demonstrate the ebb and flow of the various image positioning options ...</p>

                        <a href="#" class="more-link">Read More »<span class="screen-reader-text"> “Block: Image”</span></a>
                     </div><!-- .entry-content -->

                     <div class="entry-footer">
                        <span class="cat-links">Posted in <a href="#" rel="category tag">Uncategorized</a></span><span class="tags-links">Tagged <a href="#" rel="tag">content</a>, <a href="#" rel="tag">image</a></span><span class="comments-link"><a href="#">1 Comment<span class="screen-reader-text"> on Hello world!</span></a></span><span class="edit-link"><a class="post-edit-link" href="#">Edit <span class="screen-reader-text">Hello world!</span></a></span>
                     </div><!-- .entry-footer -->
                  </article>

                  <article class="post">
                     <div class="entry-header">
                        <h2 class="entry-title"><a href="#" rel="bookmark">Block: Button</a></h2>
                        <div class="entry-meta">
                           <span class="posted-on">Posted on <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2018-11-03T15:20:00+00:00">November 3, 2018</time></a></span><span class="byline">by <span class="author vcard"><a class="url fn n" href="#">Theme Reviewer</a></span></span>
                        </div>
                     </div><!-- .entry-header -->

                     <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum beatae vitae maxime praesentium molestias! Alias maxime quae nulla atque, quia et optio iste, quisquam praesentium est molestiae deleniti velit laboriosam ...</p>

                        <a href="#" class="more-link">Read More »<span class="screen-reader-text"> “Block: Image”</span></a>
                     </div><!-- .entry-content -->

                     <div class="entry-footer">
                        <span class="cat-links">Posted in <a href="#" rel="category tag">Uncategorized</a></span><span class="tags-links">Tagged <a href="#" rel="tag">content</a>, <a href="#" rel="tag">button</a></span><span class="comments-link"><a href="#">1 Comment<span class="screen-reader-text"> on Hello world!</span></a></span><span class="edit-link"><a class="post-edit-link" href="#">Edit <span class="screen-reader-text">Hello world!</span></a></span>
                     </div><!-- .entry-footer -->
                  </article>

                  <article class="post">
                     <div class="entry-header">
                        <h2 class="entry-title"><a href="#" rel="bookmark">Block: Cover</a></h2>
                        <div class="entry-meta">
                           <span class="posted-on">Posted on <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2018-11-03T15:20:00+00:00">November 3, 2018</time></a></span><span class="byline">by <span class="author vcard"><a class="url fn n" href="#">Theme Reviewer</a></span></span>
                        </div>
                     </div><!-- .entry-header -->

                     <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptatum vel ipsa pariatur cum distinctio veritatis sed dolorem nihil sint accusamus ratione modi, possimus tempore ullam officiis ad ipsam eligendi minima architecto. Enim, tempore quasi ...</p>

                        <a href="#" class="more-link">Read More »<span class="screen-reader-text"> “Block: Image”</span></a>
                     </div><!-- .entry-content -->

                     <div class="entry-footer">
                        <span class="cat-links">Posted in <a href="#" rel="category tag">Uncategorized</a></span><span class="tags-links">Tagged <a href="#" rel="tag">content</a>, <a href="#" rel="tag">button</a></span><span class="comments-link"><a href="#">1 Comment<span class="screen-reader-text"> on Hello world!</span></a></span><span class="edit-link"><a class="post-edit-link" href="#">Edit <span class="screen-reader-text">Hello world!</span></a></span>
                     </div><!-- .entry-footer -->
                  </article>

                  <nav class="navigation posts-navigation" aria-label="Posts">
                     <h2 class="screen-reader-text">Posts navigation</h2>
                     <div class="nav-links">
                        <div class="nav-previous"><a href="#">Older posts</a></div>
                        <div class="nav-next"><a href="#">Newer posts</a></div>
                     </div>
                  </nav>
               </main><!-- #main -->
            </div><!-- #primary -->

            <aside id="secondary" class="widget-area">
               <div class="widget widget_categories">
                  <h2 class="widget-title">Categories</h2>
                  <ul class="categories">
                     <li><a href="#">Category 1</a></li>
                     <li><a href="#">Category 2</a></li>
                     <li><a href="#">Category 3</a></li>
                     <li><a href="#">Category 4</a></li>
                     <li><a href="#">Category 5</a></li>
                     <li><a href="#">Category 6</a></li>
                     <li><a href="#">Category 7</a></li>
                     <li><a href="#">Category 8</a></li>
                     <li><a href="#">Category 9</a></li>
                     <li><a href="#">Category 10</a></li>
                  </ul>
               </div>

               <div class="widget widget_tag_cloud">
                  <h2 class="widget-title">Tags</h2>

                  <div class="tag-cloud">
                     <a href="#">Tag 1</a>
                     <a href="#">Tag 2</a>
                     <a href="#">Tag 3</a>
                     <a href="#">Tag 4</a>
                     <a href="#">Tag 5</a>
                     <a href="#">Tag 6</a>
                     <a href="#">Tag 7</a>
                     <a href="#">Tag 8</a>
                     <a href="#">Tag 9</a>
                     <a href="#">Tag 10</a>
                  </div>
               </div>
            </aside>
            <!-- #secondary -->
         </div><!-- .container -->
      </div>

      <footer id="colophon" class="site-footer">
         <div class="container">
            <ul class="wp-block-social-links aligncenter has-small-icon-size">
               <li style="color: #bbbbbb;"><a href=""><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg></a></li>
               <li style="color: #bbbbbb;"><a href=""><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path></svg></a></li>
               <li style="color: #bbbbbb;"><a href=""><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path></svg></a></li>
               <li style="color: #bbbbbb;"><a href=""><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M7.799,5.698c0.589,0,1.12,0.051,1.606,0.156c0.482,0.102,0.894,0.273,1.241,0.507c0.344,0.235,0.612,0.546,0.804,0.938 c0.188,0.387,0.281,0.871,0.281,1.443c0,0.619-0.141,1.137-0.421,1.551c-0.284,0.413-0.7,0.751-1.255,1.014 c0.756,0.218,1.317,0.601,1.689,1.146c0.374,0.549,0.557,1.205,0.557,1.975c0,0.623-0.12,1.161-0.359,1.612 c-0.241,0.457-0.569,0.828-0.973,1.114c-0.408,0.288-0.876,0.5-1.399,0.637C9.052,17.931,8.514,18,7.963,18H2V5.698H7.799 M7.449,10.668c0.481,0,0.878-0.114,1.192-0.345c0.311-0.228,0.463-0.603,0.463-1.119c0-0.286-0.051-0.523-0.152-0.707 C8.848,8.315,8.711,8.171,8.536,8.07C8.362,7.966,8.166,7.894,7.94,7.854c-0.224-0.044-0.457-0.06-0.697-0.06H4.709v2.874H7.449z M7.6,15.905c0.267,0,0.521-0.024,0.759-0.077c0.243-0.053,0.457-0.137,0.637-0.261c0.182-0.12,0.332-0.283,0.441-0.491 C9.547,14.87,9.6,14.602,9.6,14.278c0-0.633-0.18-1.084-0.533-1.357c-0.356-0.27-0.83-0.404-1.413-0.404H4.709v3.388L7.6,15.905z M16.162,15.864c0.367,0.358,0.897,0.538,1.583,0.538c0.493,0,0.92-0.125,1.277-0.374c0.354-0.248,0.571-0.514,0.654-0.79h2.155 c-0.347,1.072-0.872,1.838-1.589,2.299C19.534,18,18.67,18.23,17.662,18.23c-0.701,0-1.332-0.113-1.899-0.337 c-0.567-0.227-1.041-0.544-1.439-0.958c-0.389-0.415-0.689-0.907-0.904-1.484c-0.213-0.574-0.32-1.21-0.32-1.899 c0-0.666,0.11-1.288,0.329-1.863c0.222-0.577,0.529-1.075,0.933-1.492c0.406-0.42,0.885-0.751,1.444-0.994 c0.558-0.241,1.175-0.363,1.857-0.363c0.754,0,1.414,0.145,1.98,0.44c0.563,0.291,1.026,0.686,1.389,1.181 c0.363,0.493,0.622,1.057,0.783,1.69c0.16,0.632,0.217,1.292,0.171,1.983h-6.428C15.557,14.84,15.795,15.506,16.162,15.864 M18.973,11.184c-0.291-0.321-0.783-0.496-1.384-0.496c-0.39,0-0.714,0.066-0.973,0.2c-0.254,0.132-0.461,0.297-0.621,0.491 c-0.157,0.197-0.265,0.405-0.328,0.628c-0.063,0.217-0.101,0.413-0.111,0.587h3.98C19.478,11.969,19.265,11.509,18.973,11.184z M15.057,7.738h4.985V6.524h-4.985L15.057,7.738z"></path></svg></a></li>
               <li style="color: #bbbbbb;"><a href=""><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M12,22C6.486,22,2,17.514,2,12S6.486,2,12,2c5.514,0,10,4.486,10,10S17.514,22,12,22z M20.434,13.369 c-0.292-0.092-2.644-0.794-5.32-0.365c1.117,3.07,1.572,5.57,1.659,6.09C18.689,17.798,20.053,15.745,20.434,13.369z M15.336,19.876c-0.127-0.749-0.623-3.361-1.822-6.477c-0.019,0.006-0.038,0.013-0.056,0.019c-4.818,1.679-6.547,5.02-6.701,5.334 c1.448,1.129,3.268,1.803,5.243,1.803C13.183,20.555,14.311,20.313,15.336,19.876z M5.654,17.724 c0.193-0.331,2.538-4.213,6.943-5.637c0.111-0.036,0.224-0.07,0.337-0.102c-0.214-0.485-0.448-0.971-0.692-1.45 c-4.266,1.277-8.405,1.223-8.778,1.216c-0.003,0.087-0.004,0.174-0.004,0.261C3.458,14.207,4.29,16.21,5.654,17.724z M3.639,10.264 c0.382,0.005,3.901,0.02,7.897-1.041c-1.415-2.516-2.942-4.631-3.167-4.94C5.979,5.41,4.193,7.613,3.639,10.264z M9.998,3.709 c0.236,0.316,1.787,2.429,3.187,5c3.037-1.138,4.323-2.867,4.477-3.085C16.154,4.286,14.17,3.471,12,3.471 C11.311,3.471,10.641,3.554,9.998,3.709z M18.612,6.612C18.432,6.855,17,8.69,13.842,9.979c0.199,0.407,0.389,0.821,0.567,1.237 c0.063,0.148,0.124,0.295,0.184,0.441c2.842-0.357,5.666,0.215,5.948,0.275C20.522,9.916,19.801,8.065,18.612,6.612z"></path></svg></a></li>
            </ul>

            <p style="font-size: 14px; color: #bbb;">Copyright &copy; 2020 AWD-4, All rights Reserved.<br>
               Designed by <a href="#" target="_blank"><strong>Shujon Mahmud</strong></a></p>
         </div>
      </footer>
   </div>
   <!--/ #page -->

    <?php wp_footer(); ?>
</body>

</html>