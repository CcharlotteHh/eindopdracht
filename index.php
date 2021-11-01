<html>
<head>
<title><?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>"rel="stylesheet" />
</head>

<body>

<div id="container">
	
	<div id="header_logo">
  	<img src="<?php bloginfo('template_url');?>/imgs/logo.png" id="logo"/>
	</div>
  
  <div id="header_image">
  	<img src="<?php bloginfo('template_url');?>/imgs/header_img.jpg"/>
	</div>
  
  <div id="menu">
  	<ul>
    	<li id="menu_1"><a href="index.html">Welkom</a></li>
      <li id="menu_2"><a href="landgoed.html">Landgoed & Omgeving</a></li>
      <li id="menu_3"><a href="faciliteiten.html">Faciliteiten</a></li>
      <li id="menu_4"><a href="reserveren.html">Reserveringen & Tarieven</a></li>
      <li id="menu_5"><a href="contact.html">Contact</a></li>
    </ul>
	</div>
  
  <div id="content_wrapper">
    
    <div id="content">
      <div class="area">
      	<h1>Welkom bij Landerijen Wildvecht</h1>
        <p>
        	Donec vitae tempor nibh. Etiam nec nisl lectus. 
          Integer rutrum mattis est eget hendrerit. 
          Phasellus ac orci quis augue interdum tristique. 
          Maecenas auctor tincidunt nisi, ac auctor est porttitor ut. 
          Nullam suscipit viverra libero vel vestibulum. 
          In hac habitasse platea dictumst. Aliquam commodo consectetur felis ac sagittis. 
          Nunc eget risus ipsum. Pellentesque habitant morbi tristique senectus 
          et netus et malesuada fames ac turpis egestas. Etiam et felis ut elit imperdiet tempor. 
          Integer rutrum eleifend nisl et pharetra. Integer porttitor imperdiet leo vel sagittis. 
				</p>
        <h2>Een gewone titel</h2>
        <p>
        	Donec vitae tempor nibh. Etiam nec nisl lectus. 
          Integer rutrum mattis est eget hendrerit. 
          Phasellus ac orci quis augue interdum tristique. 
          Maecenas auctor tincidunt nisi, ac auctor est porttitor ut. 
          Nullam suscipit viverra libero vel vestibulum. 
          In hac habitasse platea dictumst. Aliquam commodo consectetur felis ac sagittis. 
          Nunc eget risus ipsum. Pellentesque habitant morbi tristique senectus 
          et netus et malesuada fames ac turpis egestas. Etiam et felis ut elit imperdiet tempor. 
          Integer rutrum eleifend nisl et pharetra. Integer porttitor imperdiet leo vel sagittis. 
				</p>
        <p>
        	Donec vitae tempor nibh. Etiam nec nisl lectus. 
          Integer rutrum mattis est eget hendrerit. 
          Phasellus ac orci quis augue interdum tristique. 
          Maecenas auctor tincidunt nisi, ac auctor est porttitor ut. 
          Nullam suscipit viverra libero vel vestibulum. 
          In hac habitasse platea dictumst. Aliquam commodo consectetur felis ac sagittis. 
          Nunc eget risus ipsum. Pellentesque habitant morbi tristique senectus 
          et netus et malesuada fames ac turpis egestas. Etiam et felis ut elit imperdiet tempor. 
          Integer rutrum eleifend nisl et pharetra. Integer porttitor imperdiet leo vel sagittis. 
				</p>
        <?php if (have_posts()){
          while (have_posts()){
            the_post();
            the_title();
            the_content();
          }
        } ?>
      </div>
    </div>
    
    <div id="sidebar">
    	<div class="area">
        <h2>Informatie</h2>
        <img src="<?php bloginfo('template_url');?>/imgs/tents.jpg" class="show_picture" />
        <h3>Landerij Wildvecht</h3>
        <p>
          Vechtlaan 23<br/>
          7463 GT Twello
        </p>
        <p>
          Tel: 075-4637483<br/>
          Tel: 075-4637483
        </p>
        <p>
          E-mail: <a href="#">info@wildvecht.nl</a><br/>
          Internet: <a href="#">www.wildvecht.nl</a>
        </p>
        <div class="follow">
          <b>Volg ons:</b>
          <p>
            <img src="<?php bloginfo('template_url');?>/imgs/socials.jpg" />
          </p>
        </div>
      </div>
      <img src="<?php bloginfo('template_url');?>/imgs/tree.gif" />
    </div>
    
    <div class="break"></div>
    
  </div>
  
  
</div>

<div id="footer">
	Alle rechten voorbehouden.
  Tarieven kunnen gewijzigd zijn.
  Landerijen Wildvecht is een onderdeel van de Hollandse Groenlanden groep. 
</div>

</body>
</html>
