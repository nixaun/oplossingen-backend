<?php

	$artikels = array(

						array ('titel' => 'Gent opgeschrikt door twee zware branden',
								'datum' => '13 september 2016',
								'inhoud' => 'Gent is gisterenavond opgeschrikt door twee zware branden. De brandweer kreeg rond 22.20 uur een eerste oproep voor een brand op het dak van kantorencomplex Portalis aan de Bollebergen in Zwijnaarde, waar een terras om onduidelijke reden in brand gevolgen was. Maar nog tijdens de laatste controles kwam er een nieuwe oproep binnen voor een zware dakbrand op de Martelaarslaan in Gent.
                            
Toen de brandweer ter plaatse kwam stond het dak al helemaal in lichterlaaie. De brandweer kon niet vermijden dat het dak volledig wegbrandde. Het huis werd dan ook onbewoonbaar verklaard aangezien er ook heel veel rook - en waterschade was. 

Schade
De drie bewoners en hun kat waren op tijd buiten, maar een van hen moest toch naar het ziekenhuis omdat ze rook had ingeademd en zwaar over haar toeren was. De aanpalende woning links heeft af te rekenen met rook - en waterschade en had een beetje schade aan het dak. Vermoedelijk lag de oorzaak van de brand bij de elektriciteit, die nog niet in orde was gebracht.

Tijdens de interventie was de Martelaarslaan in de richting van de Rooigemlaan afgesloten voor alle verkeer. 

Er is nog geen volledige duidelijkheid over de oorzaak van de brand.',
								'afbeelding' => 'artikel01.jpg',
								'afbeeldingBeschrijving' => 'brand wordt geblust door het dak',
								),

						array ('titel' => '1.850 km gefietst om Kroatische vriendin ten huwelijk te vragen',
								'datum' => '13 september 2016',
								'inhoud' => 'De liefde, een mens moet er wat voor overhebben. Dus trok Thomas Moens (26) uit Tienen naar Kroatië om er zijn vriendin Nina Ercegovic ten huwelijk te vragen. Met de fiets, welteverstaan.
                                
De liefde, een mens moet er wat voor overhebben. Dus trok Thomas Moens (26) uit Tienen naar Kroatië om er zijn vriendin Nina Ercegovic ten huwelijk te vragen. Met de fiets, welteverstaan. Liefst 1.850 km legde de twintiger af in negen dagen tijd, goed voor zo\'n 200 kilometer per dag trappen en liters bloed, zweet en tranen in achtereenvolgens België, Luxemburg, Frankrijk, Duitsland, Zwitserland, Liechtenstein, Italië, Slovenië en ten slotte Kroatië. 

Datum
Nochtans woont Nina al bijna haar hele leven in België, maar Thomas wou zijn vriendin op haar jaarlijkse reis naar haar familie dubbel en dik verrassen. En of dat lukte. "Nina viel uit de lucht toen ik in Rogoznica aankwam en haar vroeg om mijn vrouw te worden. Gelukkig zei ze ja", lacht Thomas. Een huwelijksdatum heeft het koppel nog niet vastgelegd, maar het is al zeker dat er een viering in België én in Kroatië zal plaatsvinden. Vermoedelijk zal Thomas dan gewoon met zijn bruid het vliegtuig nemen.',
								'afbeelding' => 'artikel02.jpg',
								'afbeeldingBeschrijving' => 'Thomas op de fiets',
								),

						array ('titel' => 'Ontvoerde\' jongen (4) had zich verstopt: "We vreesden echt het ergste"',
								'datum' => '13 september 2016',
								'inhoud' => 'De Brugse politie heeft gisterenavond met man en macht gezocht naar de kleine Ryan Vermeulen (4). Enkele kinderen hadden zijn vader verteld dat ze gezien hadden hoe een oudere man Ryan had meegesleurd op het speelplein. Na een half uur zoeken bleek uiteindelijk dat de knaap gewoon in de struiken zat. "Ik vreesde echt het ergste", zegt papa Jurgen.',
								'afbeelding' => 'artikel03.jpg',
								'afbeeldingBeschrijving' => 'vader met twee zonen',
								),
					);


	
	$individueelArtikel		=	false;
	$nietBestaandArtikel	=	false;

	
	if ( isset ( $_GET['id'] ) )
	{
		$id = $_GET['id'];

		
		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$individueelArtikel	=	true;
		}
		else
		{
			$nietBestaandArtikel	=	true;
		}		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php if ( !$individueelArtikel ): ?>
		<title>Opdracht get: deel1</title>
	<?php elseif ( $nietBestaandArtikel ): ?>
		<title>Opdracht get: deel1 - Het artikel met id <?php echo $id ?> bestaat niet</title>
	<?php else: ?>
		<title>Opdracht get: deel1. Artikel: <?php echo $artikels[0]['titel'] ?></title>
	<?php endif ?>
		
	<style>
		body
		{
			font-family:"Segoe UI";
			color:#423f37;
		}

		.container
		{
			width:	1024px;
			margin:	0 auto;
		}

		img
		{
			max-width: 100%;
		}

		.multiple
		{
			float:left;
			width:288px;
			margin:16px;
			padding:16px;
			box-sizing:border-box;
			background-color:#EEEEEE;
		}

		.multiple:nth-child(3n+1)
		{
			margin-left:0px;
		}

		.multiple:nth-child(3n)
		{
			margin-right:0px;
		}

		.single img
		{
			float:right;
			margin-left: 16px;
		}


	</style>
</head>
<body>

	<h1>Oplossing get: deel1</h1>

	

	<?php if ( !$nietBestaandArtikel ): ?>
		<div class="container">
			<?php foreach ( $artikels as $id => $artikel ): ?>
				<article class="<?php echo ( !$individueelArtikel ) ? 'multiple': 'single' ; ?>">
					<h1><?php echo $artikel['titel'] ?></h1>
					<p><?php echo $artikel['datum'] ?></p>
					<img src="img/<?php echo $artikel['afbeelding'] ?>" alt="<?php echo $artikel['afbeeldingBeschrijving'] ?>">
					<p><?php echo ( !$individueelArtikel ) ? str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikel['inhoud'] ) ; ?></p>
					<?php if ( !$individueelArtikel ): ?>
						<a href="oplossing-get-deel1.php?id=<?php echo $id ?>">Lees meer</a>
					<?php endif ?>
				</article>
			<?php endforeach ?>
		</div>
	<?php else: ?>
		<p>Het artikel met id <?php echo $id ?> bestaat niet. Probeer een ander artikel.</p>
	<?php endif ?>

</body>
</html>