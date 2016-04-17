<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About <?php echo CHtml::encode(Yii::app()->name); ?></h1>

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

<table>
<!--Introduction-->
<tr>
	<th colspan="3">
		<h4>Where dreams come home...</h4>		​
		<p>We take our tagline very seriously and have been committed to finding you the perfect home for your business or selves. 
		We look forward to meeting you and finding you your perfect place.</p>
	</th>
</tr>

<!--Company Overview-->
<tr>
	<th colspan="2">
		<h2>Company Overview</h2>
	</th>	
	<th width=275>
		<h2></h2>        
	</th>
</tr>
<tr>
    <td colspan="2">   
		<p>OREMIS is a real estate services firm focused on delivering high quality and customized services to individuals, 
		the private sector and government clients in Kenya. The firm, duly incorporated under the companies Act Cap 486 in 1994, 
		began operations with a team of only four members of staff but has now grown to over two hundred and the initial five clients have multiplied many times over.</p>
		<p>Today, the company has made its presence strongly felt in the Kenyan property market and can with certainty declare itself a market leader. 
		The firm offers a wide scope of real estate services, particularly specializing in real estate consultancy, 
		management and sale of residential properties and a variety of commercial properties in Nairobi, Mombasa and Kenya at large.</p>      
		<p>OREMIS offers highly specialized and professional property management services in Kenya. 
		This is on the backbone of experience and the use of the state of the art technology. 
		The use of a cloud based, internationally proven software solution allows real time access of tenants and property owner data. 
		The professionalism and seamless property management of OREMIS are unmatched in the region.</p>
	</td>
    <td width=275>		        
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/home/'.'company-overview.jpg',"CompanyOverview",array("width"=>300,"height"=>275)); ?>
	</td>
</tr>

<!--Management Team-->
<tr>
	<th width=275>
		<h2></h2>
	</th>		
	<th colspan="2">
		<h2>Management Team</h2>        
	</th>
</tr>
<tr>
    <td width=275>   
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/home/'.'management-team.jpg',"ManagementTeam",array("width"=>300,"height"=>275)); ?>
	</td>	
    <td colspan="2">        
		<p>OREMIS is led by a diverse, seasoned management team, each possessing extensive experience with leading property development 
		and real estate management firms in the country. Undoubtedly, our success in both the residential and commercial property markets in 
		Kenya and particularly in Mombasa is drawn from our immensely rich personnel base whose vast experience and expertise in the 
		real estate industry has been.</p>
		<p>The team consists of young, highly motivated and multidisciplinary graduates who are actively involved in 
		consultancy, marketing, development, letting and management of both residential and commercial properties.</p>
	</td>
</tr>

<!--Our Services-->
<tr>
	<th colspan="2">
		<h2>Our Services</h2>
	</th>	
	<th width=275>
		<h2></h2>        
	</th>
</tr>
<tr>
    <td colspan="2">   
		<p>OREMIS offers a wide range of fully integrated real estate services for both commercial and residential properties to a diverse clientele.</p>
		<p>Effective marketing tools and strategies, established through extensive research of the real estate market 
		and customized to current market conditions are used to increase our broad database of buyers, sellers, land lords, tenants and investors. 
		All our services are provided by a team of property specialists who have an in-depth knowledge and expertise in the areas they specialize in. </p>      
		<p>OREMIS mainly focuses in offering:
			<ol><li>Property management,</li>
			<li>Real Estate Consultancy and</li> 
			<li>Property Marketing services</li></ol></p>
	</td>
    <td width=275>		        
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/home/'.'our-services.jpg',"OurServices",array("width"=>300,"height"=>275)); ?>
	</td>
</tr>
</table>

<!--Mission Statement-->
<table style="background-color: #ff8080">
<tr>
	<th colspan="3">
		<h2>Mission Statement</h2>
	</th>
</tr>
<tr>	
	<td width=300 style="text-align:right">
		<h3>Our Vision</h3>
		<p>Our vision is to be the leading real estate services company in Kenya and the East African region.</p>        
	</td>
	<td width=50>
		<p></p>        
	</td>
	<td width=300 style="text-align:left">
		<h3>Our Mission</h3>
		<p>To provide the highest quality of real estate services and advice with diligence, expertise and utmost transparency.</p>        
	</td>
</tr>
</table>