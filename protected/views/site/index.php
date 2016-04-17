<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<style>
table { 
    display: table;
    border-collapse: separate;
    border-spacing: 25px;
	width: 900px;
	background-color: #b8bdc7;
	color: #000000;
}

th {
	vertical-align: bottom;
	text-align: center;
	padding: 0px;
}

td {
	vertical-align: top;
	text-align: justify;
	padding: 5px;
}
</style>

<h1>WELCOME TO <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p class="note"><b>Where Dreams Come Home...</b></p>

<?php
$this->widget( 'ext.SimpleFadeSlideShow.SimpleFadeSlideShow', array( 
	'images' => array(
		Yii::app()->request->baseUrl.'/images/home/slideImage (1).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (2).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (3).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (4).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (5).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (6).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (7).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (8).JPG',
		Yii::app()->request->baseUrl.'/images/home/slideImage (9).JPG',
	),
	'width' => 900, 
	'height' => 360, 
	'interval' => 5000, 
	'speed' => 'slow', 
	'ListElement' => false, 
	'PlayPauseElement' => false, 
	'autoPlay' => true,
	) );
?>

<p class="note">
<b>Caption: Models of our on going projects.</b>
</p>

<table>
<tr>
	<th>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/home/'.'icon_SearchFaster.png',"Buy&RentKenya",array("width"=>75,"height"=>75)); ?>
		</br>
		<h2>Buy & Rent Kenya</h2>
	</th>	
	
	<th>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/home/'.'icon_RentEasily.png',"HighQualityProperties",array("width"=>75,"height"=>75)); ?>
		</br>
		<h2>High Quality Properties</h2>        
	</th>
	
	<th>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/home/'.'icon_TopAgents.png',"FindYourAgent",array("width"=>75,"height"=>75)); ?>
		</br>
		<h2>Find Your Agent</h2>
	</th>
</tr>

<tr>
    <td>   
		The Kenya real estate market has been experiencing an unprecedented boom in recent times. 
		With the number of for sale and to let real estate sky-rocketing, it has never been easier for you to find the home you have always dreamt of! 
		Whether you are looking for a luxury apartment in Nairobi, a modest plot of Land in Nyanza, or commercial property for your new business venture in Rift Valley, 
		OREMIS has the perfect deal for you! Equally, if your aim is to sell or rent out a piece of equity, OREMIS is the perfect place for that too.   
	</td>
	
    <td>        
		The range of listings coupled with the extraordinary geographical fecundity and excellent pricing, make OREMIS simply unbeatable! 
		Apartments in Lavington are just as easy to come by as office space in Mombasa or plots of land in Rift Valley. 
		Our aim to cater to all members of society ensures that the range of prices is competitive and fair, enabling everyone to find their dream home at OREMIS. 
		If your wish is to sell or rent out some prime real estate, then OREMIS is the perfect choice, 
		as our intelligently-designed website allows you to showcase your property with photos and information.    
	</td>

    <td>		        
		There is a whole host of reasons why OREMIS is the perfect choice for you! 
		Perhaps most important amongst these is the highly regarded <strong>“Trusted Seller”</strong> seal of approval, 
		which is an innovation unique to OREMIS, and which guarantees that the persons or company you deal with are reputable and honest! 
		Therefore, you can always trust OREMIS to combat fraud and act in your best interests in your dealings on the real estate Kenya market. 
		Another point worth remembering is that OREMIS is 100% free to search! This includes high quality customer service, 
		individual updates via email and of course our listings.
	</td>
</tr>
</table>