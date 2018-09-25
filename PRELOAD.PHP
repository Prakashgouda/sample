<?php
	$page=1;
	$dataonly=false;
	if(isset($_GET["page"]))
	{
		$page=(int) $_GET["page"];
	}
	if(isset($_GET["dataonly"])&&$_GET["dataonly"]=="true")
	{
		$dataonly=true;
		
	}
	if(!$dataonly){
		
	?>
	<html>
	<head>
	<title>Page preloading</title>
	<script type="text/javascript" SRC="Zxml.js"></script>
	<script type="text/javascript" SRC="Adrticle.js"></script>
	<link rel="stylesheet" type="text/css" href="Adrticle.css"/>
	</head>
	<body>
	<center><h1><b><u><font color="blue">Web Technology</font></u></b></h1>
	<div id="divLoadArea" style="display:none"></div>
	<?php
		 $output="<p><B><h2>Page</h2></B> ";
		 $st="<h3><b><font color='Lavender'>";
		 
		 for($i=1;$i<4;$i++)
		 {
			 $output .="<a href=\"preload.php?page=$i\" id=\"aPage$i\"";
			 if($i==$page)
			 {
				 $output .= "class=\"current\"";
				 
			 }
			 $output .= "><b> $i</b></a>";
			 
		 }
		 echo $output;
		 echo "<br><br><br>";
	}
		 
		 if($page==1)
		 {
			  
			 ?>
			  <div id="divpage1">
Introduction:

Web technologies is a general term referring to the many languages and multimedia packages that are used in conjunction with one another, to produce dynamic web sites such as this one. Each separate technology is fairly limited on it's own, and tends to require the dual use of at least one other such technology. Therefore we can conclude that all of the components that make up a site are interdependent on one another.

This guide is intended to briefly introduce the beginner to each of these separate technologies, without attempting to teach anyone how to program. If you intend to study web design further, check our links section for many useful tutorial sites.

The Backend: CGI and Perl
If you will forgive me for continuing with the house analogy; if HTML forms the foundation of the house, with the various flavours of DHTML and Flash forming the structure of the house above ground (the bits you see), then CGI (Common Gateway Interface) would form the functional workings parts of the house that you can not see such as the plumbing, electrical wiring and heating.

So CGI is concerned with the working parts of your web site, which may include hit counters, form processors or web statistics tools. There are many different languages that may be termed 'CGI', the most popular of which is Perl. Perl is the language of choice for adding function to your site. HTML, DHTML and Flash are fine for controlling the look and presentation of your site, but Perl is needed to run the mechanics of it behind the scenes.

We can differentiate between the presentation (the bit the visitor sees) and the functional (the bit they don't see) parts of a site using the terms 'front-end' and 'back-end' respectively. Therefore, Perl is often referred to as a back-end technology. It operates on the server that hosts your site, rather the within the browser window of a visitor to your site.

</div>
			  <?php
			  
		 }if($page==2){
		 ?>
		 <div id="divpage2">
		 HTML: The Foundation of any Web Site.
HTML (Hyper Text Mark-up Language) is the glue that holds together every web site. Like building a house, you always build a strong foundation first. For any site, HTML is that foundation. HTML is an open source language (i.e. not owned by anyone), which is easy to learn, and requires no fancy (or expensive!) packages to start using it. All you need is something to type with, such as Windows Notepad, and a lot of time and patience.

HTML works on a 'tag' system, where each tag effects the content placed within that tag, e.g.

<TAG>What the tag effects</TAG>.
Although relatively limited by itself, it is the flexibility of HTML that allows web sites to grow in complexity. Like the foundation of your house, HTML is robust enough to support many kinds of languages integrated within your HTML pages.</div>
		 <?php
	}if($page==3){
		?>
		<div id="divpage3">
		DHTML
DHTML (Dynamic HTML) is just as the name suggests, it adds dynamic, moving or changing content to your plain old HTML pages. Think of it as a more advanced version of HTML, although DTHML is in fact not a programming language in itself. DHTML is a broad term used to describe a group of applications, the main ones are described below:

JavaScript: JavaScript is a 'scripting' language. A bit like a script in a feature film, it is used to decide 'what happens next'. This may be a sequence of screen events, where one event is initiated by the end of another, or it could be a programmed response to a user interacting with the page in some way, e.g. moving their mouse over a link. JavaScript is a complex and powerful language, and may be placed directly inside a HTML page, or in a separate JavaScript file.

CSS and CSS-P: CSS (Cascading Style Sheets) is a relatively new language, designed to expand upon the limited style properties of HTML. Easy to learn and implement, CSS is an excellent way to control the style of your site, such as text styles like size, colour and font.

CSS may also be placed inside the HTML page or in separate files. The real advantage of having all of the style properties for your entire site in one single CSS file is that you may edit that single file to effect changes on the whole site, rather than having to go through each HTML file one at a time. For this reason, it is perhaps the most useful web technology and certainly one of my favourites.

CSS-P (CSS-Positioning) is a sub-set of CSS, and is concerned mainly with the layout of your HTML pages. It allows the web designer to place any element (text, graphic etc.) exactly on the screen where they want it, to the pixel.

DOM: DOM (Document Object Model) allows the designer to access any element in a HTML page, such as an image, layer or table. Each element may be assigned a unique 'id' name to identify it by, e.g.

<TAG ID="My Tag">Content of My Tag</TAG>
When combined with CSS and JavaScript, the DOM may be used to make changes to only "My Tag" and no other element, such as increasing text size or the position of "My Tag" on the screen. JavaScript my also be used to animated such changes to any identified element, such as gradually increasing the size of the text on screen.

Each different browser has it's own DOM, and this is often used to determine which browser the visitor is using. A particular action may be carried out if the person is using NS6, for example, and ignored if the person is using IE5.

</div>
	<?php
	}
	if(!$dataonly){
		?>
		</body>
		</html>
	<?php
	}
	?>

	
	