 <?
	$pages = array(
			'home'=>array(
				'url'=>'index.php', 
				'section'=> 'home',
				'title'=>'Home'
				), 
			'links'=> array(
				'url'=>'links.php', 
				'section'=> 'links',
				'title'=>'Links'
				),
			'contact'=> array(
				'url'=>'contact.php', 
				'section'=> 'contact',
				'title'=>'Contact Us'
				),
			);
			$pages[] = array(
				'url'=>'store.php', 
				'section'=> 'store',
				'title'=>'Buy our stuff'
				);
			
			$name =$pages[$location];
			$msg = "hello $name[title]";

?>   
<div class="container">
	<div class="navbar navbar-inverse navbar-fixed-top" role ="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-taget".nav-c">
    			<span class="icon-bar"></span>
   		 		<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
   			</button>
   			<a class="nav-brand" href="#" >Playground</a>
   		</div>
   	
    <div class="collapse navbar-collapse nav-c">
    	<ul class="nav navbar-nav">
    		<li class="home" <? if($location =='home') echo"active"; ?>><a href="./">Home</a></li>
    		<li class="contact" <? if($location =='contact') echo"active"; ?>><a href="./">Contact</a></li>
    		<li class="links" <? if($location =='links') echo"active"; ?>><a href="./">Links</a></li>
    		<?foreach($pages as $name => $data):?>
				<li class="home" <?=$data['section']?> <?if($location == $data['section']) echo "active"; ?>">
					<a href="<?=$data['url']?>"><? =$data['title']?></a>
				</li>
			<?endforeach; ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle=" data-toggle="dropdown"> Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another Action</a></li>
					<li><a href="#">Something else here</a></li>
					<li><a href="#">Separated link</a></li>
					<li><a href="#">One more separated link</a></li>
				</ul>
			</li>
    	</ul>
    </div>
    </div>
    <pre class"container">
    	<? echo json_encode($pages, null, 1);?>
    </pre>
