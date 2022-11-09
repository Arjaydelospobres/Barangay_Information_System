<?php include 'server/server.php' ?>
<?php 

	$query = "SELECT * FROM tblresident WHERE resident_type=1";
    $result = $conn->query($query);
	$total = $result->num_rows;

	$query1 = "SELECT * FROM tblresident WHERE gender='Male' AND resident_type=1";
    $result1 = $conn->query($query1);
	$male = $result1->num_rows;

	$query2 = "SELECT * FROM tblresident WHERE gender='Female' AND resident_type=1";
    $result2 = $conn->query($query2);
	$female = $result2->num_rows;

	$query3 = "SELECT * FROM tblresident WHERE voterstatus='Yes' AND resident_type=1";
    $result3 = $conn->query($query3);
	$totalvoters = $result3->num_rows;

	$query4 = "SELECT * FROM tblresident WHERE voterstatus='No' AND resident_type=1";
	$non = $conn->query($query4)->num_rows;

	$query5 = "SELECT * FROM tblpurok";
	$purok = $conn->query($query5)->num_rows;

	$query6 = "SELECT * FROM tblprecinct";
	$precinct = $conn->query($query6)->num_rows;

	$query7 = "SELECT * FROM tblblotter";
	$blotter = $conn->query($query7)->num_rows;

	$date = date('Y-m-d'); 
	$query8 = "SELECT SUM(amounts) as am FROM tblpayments WHERE `date`='$date'";
	$revenue = $conn->query($query8)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Dashboard -  Barangay Management System</title>
          
          
          
          
         

</head>
<body>
	<?php include 'templates/loading_screen.php' ?>

	
		
<?php include 'templates/m-header.php' ?>
		<!-- Sidebar -->
		<?php include 'templates/sidebar.php' ?>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">

 <link rel='stylesheet' href='assets/css/philatlas.css' />
          <script src='assets/js/chart.js' defer='defer'></script>
          
          <script src='assets/js/leaflet.js' defer='defer'></script>
          <script src='assets/js/philatlas-brgy.js' defer='defer'></script>
          <noscript><style>#mainNavToggle{display:none}</style></noscript>
<!-- Global site tag (gtag.js) - Google Analytics -->

<noscript>
	<div id='noScriptMsg'>To display interactive charts and maps on this site,
	 <a class='noscript-msg-link' target='_blank' rel='external nofollow' title='Information on how to enable JavaScript in your browser (opens in new tab)'>enable JavaScript in your web browser</a></div></noscript>
	
		
			
		
	
	<div id='bodyWrap'>
		<nav id='leftNav' aria-label='Related links'>
			<details open>
				</details>
			</nav>
			<main id='bodyMainText'><!-- Large Mobile Banner --><div id='adTopWrap'>

<ol >
				
				
				<li role='presentation'><a  id='placeName'></a></li>
			</ol>
<article>
	<header id='mainHeadWrap'>
		<center><img src="img/received_3229066017336061.webp" style="width:110px; height:110px;"></center>
		<h1>Campo Tinio
			<span id='subHeadSmall'>
				<span class='dispNone'>, </span>
				<span class='blockSubHead'>City of Cabanatuan</span>
				<span class='dispNone'>, </span>
				<span class='blockSubHead'>Province of Nueva Ecija</span>
			</span></h1>
		
		<nav id='toc' aria-labelledby='toc-label'>
			<h4>
					<div id='iboxWrap'><table class='iBox'><caption class='iboxTitle'>Summary data</caption><tr><th scope='row' class='iboxProp'>Type</th><td class='iboxVal'>barangay</td></tr><tr><th scope='row' class='iboxProp'>Island group</th><td class='iboxVal'>Luzon</td></tr><tr><th scope='row' class='iboxProp'>Region</th><td class='iboxVal'>Central Luzon (Region&#160;III)</td></tr><tr><th scope='row' class='iboxProp'>Province</th><td class='iboxVal'>Nueva Ecija</td></tr><tr><th scope='row' class='iboxProp'>City</th><td class='iboxVal'> Cabanatuan</td></tr><tr><th scope='row' class='iboxProp' title='Postal/ZIP code'>Postal code</th><td class='iboxVal'>3100</td></tr><tr class='borderBottom'><th scope='row' class='iboxProp'>Population (2020)</th><td class='iboxVal'>11,917</td></tr><tr><th scope='row' class='iboxProp' title='island location (includes only the largest islands in the Philippines'>Philippine major island(s)</th><td class='iboxVal'>Luzon</a></td></tr><tr class='borderTop'><th scope='row' class='iboxProp'>Coordinates</th><td class='iboxVal'><span id='latitude'>15.4889</span>, <span id='longitude'>121.0356</span> (15&#176;&#160;29'&#160;North, 121&#176;&#160;2'&#160;East)</td></tr><tr><th scope='row' class='iboxProp'>Estimated elevation above sea&#160;level</th><td class='iboxVal'>48.7&#160;meters (159.8&#160;feet)</td></tr></table></div><p class='articleContent'><strong><dfn>Campo Tinio</dfn></strong> is a barangay in the city of Cabanatuan, in the province of Nueva Ecija. Its population as determined by the 2020 Census was 11,917. This represented 3.64% of the total population of Cabanatuan.</p><section id='sectionDemog' aria-labelledby='sectionDemog-head'><h2 id='sectionDemog-head'>Demographics</h2><section id='sectionHouseholds' aria-labelledby='sectionHouseholds-head'><h3 id='sectionHouseholds-head'>Households</h3><p class='articleContent'>The household population of Campo Tinio in the 2015 Census was 11,449 broken down into 2,664 households or an average of 4.30 members per household.</p><details open id='households-details'><summary>details</summary><div class='tableWrap' id='households-table-wrap'><table class='chart-table' id='households-table'><caption class='chart-table-caption' id='households-table-caption'>Number of households in Campo Tinio (1990&#8209;2015)</caption><thead><tr><th scope='col'>Census date</th><th scope='col'>Household population</th><th scope='col'>Number of households</th><th scope='col'>Average household size</th></tr></thead><tbody><tr><th scope='row'><time datetime='1990-05-01'>1990 May&#160;1</time></th><td id='household-pop-1990'>4,005<td>773</td><td>5.18</td></tr><tr><th scope='row'><time datetime='1995-09-01'>1995 <abbr title='September'>Sep</abbr>&#160;1</time></th><td id='household-pop-1995'>5,648</td><td>1,109</td><td>5.09</td></tr><tr><th scope='row'><time datetime='2000-05-01'>2000 May&#160;1</time></th><td id='household-pop-2000'>6,832</td><td>1,368</td><td>4.99</td></tr><tr><th scope='row'><time datetime='2007-08-01'>2007 <abbr title='August'>Aug</abbr>&#160;1</time></th><td id='household-pop-2007'>8,468</td><td>1,873</td><td>4.52</td></tr><tr><th scope='row'><time datetime='2010-05-01'>2010 May&#160;1</time></th><td id='household-pop-2010'>8,656</td><td>1,946</td><td>4.45</td></tr><tr><th scope='row'><time datetime='2015-08-01'>2015 <abbr title='August'>Aug</abbr>&#160;1</time></th><td id='household-pop-2015'>11,449</td><td>2,664</td><td>4.30</td></tr></tbody></table></div><div id='households-chart-container'><div class='chart-canvas-wrap' id='households-canvas-wrap'></div><div id='households-ad-wrap'>
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-2185754216036353"
     data-ad-slot="4651817497"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div></div></details></section><section id='popByAgeGrp' aria-labelledby='popByAgeGrp-head'><h3 id='popByAgeGrp-head'>Population by age group</h3><p class='articleContent'>According to the 2015 Census, the age group with the highest population in Campo Tinio is <em>20 to 24</em>, with 1,254 individuals. Conversely, the age group with the lowest population is <em>75 to 79</em>, with 65 individuals.</p><details open id='popByAgeGrpDet'><summary>details</summary><div class='tableWrap' id='age-grp-table-wrap'><table class='sortable chart-table' id='popByAgeGrpTable'><caption class='chart-table caption' id='popByAgeGrpTable-caption'>Population of Campo Tinio by age group (2015 census)</caption><thead><tr><th scope='col'>Age group</th><th scope='col'>Population (2015)</th><th scope='col'>Age group percentage</th></tr></thead><tbody><tr><th scope='row' data-sorttable_customkey='0'>Under 1</th><td>228</td><td>1.99%</td></tr><tr><th scope='row'>1 to 4</th><td>857</td><td>7.49%</td></tr><tr><th scope='row'>5 to 9</th><td>1,084</td><td>9.47%</td></tr><tr><th scope='row'>10 to 14</th><td>1,103</td><td>9.63%</td></tr><tr><th scope='row'>15 to 19</th><td>1,167</td><td>10.19%</td></tr><tr><th scope='row'>20 to 24</th><td>1,254</td><td>10.95%</td></tr><tr><th scope='row'>25 to 29</th><td>1,143</td><td>9.98%</td></tr><tr><th scope='row'>30 to 34</th><td>867</td><td>7.57%</td></tr><tr><th scope='row'>35 to 39</th><td>765</td><td>6.68%</td></tr><tr><th scope='row'>40 to 44</th><td>619</td><td>5.41%</td></tr><tr><th scope='row'>45 to 49</th><td>625</td><td>5.46%</td></tr><tr><th scope='row'>50 to 54</th><td>561</td><td>4.90%</td></tr><tr><th scope='row'>55 to 59</th><td>421</td><td>3.68%</td></tr><tr><th scope='row'>60 to 64</th><td>301</td><td>2.63%</td></tr><tr><th scope='row'>65 to 69</th><td>201</td><td>1.76%</td></tr><tr><th scope='row'>70 to 74</th><td>99</td><td>0.86%</td></tr><tr><th scope='row'>75 to 79</th><td>65</td><td>0.57%</td></tr><tr><th scope='row' data-sorttable_customkey='80 to 80+'>80 and over</th><td>89</td><td>0.78%</td></tr></tbody><tfoot><tr><th scope='row'>Total</th><td id='ageGrpTotalPop'>11,449</td><td id='ageGrpTotalPerc'>100.00%</td></tr><tr><th scope='row' colspan='3' id='age-grp-table-fnotes'><ul id='age-grp-table-fnotes-list'><li class='table-fnote-list-item'><abbr class='abbrNoLine' title='Ages 14 and under'>Youth</abbr> Dependency Ratio: <span id='youth-dependency-ratio'>42.37</span></li><li class='table-fnote-list-item'><abbr class='abbrNoLine' title='Ages 65 and over'>Old Age</abbr> Dependency Ratio: <span id='old-age-dependency-ratio'>5.88</span></li><li class='table-fnote-list-item'>Total Dependency Ratio: <span id='total-dependency-ratio'>48.25</span></li><li class='table-fnote-list-item'>Median Age: <span id='median-age'>25.14</span></li></ul></th></tr></tfoot></table></div><div id='age-grp-chart-container'><div class='chart-canvas-wrap' id='age-grp-canvas-wrap'></div><div id='medium-rect-ad-wrap'>

<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-2659927017888695"
     data-ad-slot="7548673606"></ins>

</div></div></details></section><section id='sectionHistPop' aria-labelledby='sectionHistPop-head'><h3 id='sectionHistPop-head'>Historical population</h3><p class='articleContent'>The population of Campo Tinio grew from 4,005 in 1990 to 11,917 in 2020, an increase of 7,912 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 0.85%, or an increase of 468 people, from the previous population of 11,449 in 2015.</p><div class='tableWrap' id='histpop-table-wrap'><table class='chart-table' id='histPop'><caption class='chart-table-caption' id='histpop-table-caption'>Population of Campo Tinio (1990&#8209;2020)</caption><thead><tr><th scope='col'>Census date</th><th scope='col'>Population</th><th scope='col'>Growth rate</th></tr></thead><tbody><tr><th scope='row'><time datetime='1990-05-01'>1990 May&#160;1</time></th><td id='pop1990'>4,005</td><td>&#8211;</td></tr><tr><th scope='row'><time datetime='1995-09-01'>1995 <abbr title='September'>Sep</abbr>&#160;1</time></th><td id='pop1995'>5,650</td><td class='pcInc' title='positive growth rate from 1990 to 1995'>6.66%</td></tr><tr><th scope='row'><time datetime='2000-05-01'>2000 May&#160;1</time></th><td id='pop2000'>6,832</td><td class='pcInc' title='positive growth rate from 1995 to 2000'>4.16%</td></tr><tr><th scope='row'><time datetime='2007-08-01'>2007 <abbr title='August'>Aug</abbr>&#160;1</time></th><td id='pop2007'>8,468</td><td class='pcInc' title='positive growth rate from 2000 to 2007'>3.00%</td></tr><tr><th scope='row'><time datetime='2010-05-01'>2010 May&#160;1</time></th><td id='pop2010'>8,656</td><td class='pcInc' title='positive growth rate from 2007 to 2010'>0.80%</td></tr><tr><th scope='row'><time datetime='2015-08-01'>2015 <abbr title='August'>Aug</abbr>&#160;1</time></th><td id='pop2015'>11,449</td><td class='pcInc' title='positive growth rate from 2010 to 2015'>5.47%</td></tr><tr><th scope='row'><time datetime='2020-05-01'>2020 May&#160;1</time></th><td id='pop2020'>11,917</td><td class='pcInc' title='positive growth rate from 2015 to 2020'>0.85%</td></tr></tbody></table></div><div class='chart-canvas-and-buttons-wrap' id='histpop-chart-container'><div class='chart-canvas-wrap' id='histpop-canvas-wrap'></div><div id='histpop-ad-wrap'>
<ins class="adsbygoogle mobile-banner-ad"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-2185754216036353"
     data-ad-slot="9650161250"></ins>

</div></div></section></section><section id='sectionLocation' aria-labelledby='sectionLocation-head'><h2 id='sectionLocation-head'>Location</h2><p class='articleContent'>Campo Tinio is situated at approximately 15.4889, 121.0356, in the island of Luzon. Elevation at these coordinates is estimated at 48.7 meters or 159.8 feet above mean sea level.</p>
<center><img src="img/campo.jpg" style="width:100%; height:100%;"></center></section>


</div>
</div>
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>