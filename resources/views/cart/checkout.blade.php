@extends('layouts.ecom')

@section('content')
<section class="site-content site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7" style="border-right: #000 1px solid;">
				<a href="/"><h1>Vendeon</h1></a>
				<div class="breadcrumb">
					<li class="active">
						<a href="/cart">Cart</a>
					</li>
					<li>
						<span>Customer Information</span>
					</li>
				</div>
				<form>
					<div class="label-custom">Contact Information</div>
					<div class="form-group form-custom">
	                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Here" required>
	                    <label for="email">Email address</label>
	                </div>

	                <div class="label-custom">Shipping Information</div>
					<div class="form-group form-custom">
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" required>
								<label for="email">First name</label>
							</div>
							<div class="col-md-6 col-xs-12">
								<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" required>
								<label for="email">Last name</label>
							</div>
						</div>
	                </div>
	                <div class="form-group form-custom">
	                	<input type="text" id="city" name="city" class="form-control form-select" placeholder="City" required>
	                	<label for="email">City</label>
	                	<ul id="city_list" class="form-select-list">
	                		@foreach($cities as $key => $city)
								<li><span>{{ $city }}</span></li>
							@endforeach
						</ul>
	                </div>
	                <div class="form-group form-custom">
	                	<input type="text" id="barangay" name="barangay" class="form-control" placeholder="Barangay" required>
	                	<label for="email">Barangay</label>
	                </div>
	                <div class="form-group form-custom">
	                	<input type="text" id="address" name="address" class="form-control" placeholder="Complete Address(Home #, Street, Subd...)" required>
	                	<label for="email">Complete Address(Home #, Street, Subd...)</label>
	                </div>
	                <div class="form-group form-custom">
	                	<div class="row">
	                		<div class="col-md-6 col-xs-12">
	                			<input type="text" id="city" name="city" class="form-control" placeholder="City" required value="Philippines" readonly>
	                		</div>
	                		<div class="col-md-6 col-xs-12">
	                			<input type="text" id="postal" name="postal" class="form-control" placeholder="Postal" required value="Philippines">
	                		</div>
	                	</div>
	                </div>

	                <div class="form-group">
	                	<div class="row">
	                		<div class="col-md-5 col-md-offset-7">
	                    		<button type="submit" class="btn btn-sm btn-primary" style="width: 100%;height: 50px;font-size: 16px;"> Continue to Shipping Method</button>
	                		</div>
	                	</div>
	                </div>
				</form>
			</div>
			<div class="col-md-5">
				<table class="table">
					<thead>
						@foreach($carts as $key => $cart)
							<tr>
								<td>
									<div class="cart-image">
										<img src="{{ asset('products').'/'.$cart->product->photo->file_name }}" style="width: 90px;">	
									</div>
								</td>
								<td>{{ $cart->product->title }}</td>
								<td>
									&#8369; {{ (int)$cart->price * (int)$cart->quantity }}
								</td>
							</tr>
						@endforeach
					</thead>
				</table>
			</div>
		</div>
		
	</div>
</section>
@endsection

@push('styles')
	<style type="text/css">
		.cart-image {
			border: #000 1px solid;
		    border-radius: 10px;
		    width: 90px;
		    overflow: hidden;
		    height: 90px;
		}
		.cart-image img {
			width: 100px;
		}
		.label-custom {
			font-size: 20px;
		    margin-bottom: 10px;
		    font-weight: normal;
		    display: inline-block;
    		max-width: 100%;
		}
		.form-custom {
			position: relative;
		}
		.form-custom label {
			font-size: .9rem;
		    position: absolute;
		    padding-left: .75rem;
		    color: #6f6f6f;
		    top: 0;
		    display: none;
		}
		.form-custom input {
			height: 45px;
			padding: .375rem .75rem;
		}

		.form-custom input:focus {
			padding: 1rem .75rem 0 .75rem;
		}
		.form-custom input:focus ~ label {
			display: inline-block;
		}
		.form-select-list { 
		    background-color: white;
		    list-style-type: none;
		    padding: 0;
		    border: #a2a2a2 1px solid;
		    position: absolute;
		    z-index: 1000;
		    width: 100%;
		    display: none;
		}
		.form-select:focus ~ .form-select-list {
			display: block;
		}
		.form-select-list li {
		    padding: 5px 10px;
    		cursor: pointer;
    		color: black;
		}
		.form-select-list li:hover {
    		background-color: #25bce3;
    	}
    	.form-select-list li a {
		    
		    text-decoration: none;
		}
		.table >thead > tr > td {
			vertical-align: middle;
		}
	</style>
@endpush

@push('scripts')
	<script type="text/javascript">

		$('#city').keyup((event) => {
			search('#city', 'city_list');
		});

		$('#city_list').on('mousedown', 'li', function(event) {
			let span = $(this).find('span').html();
			$("#city").val(span);
		});

		const search = (input_id, list_id) => {
			var input, filter, ul, li, a, i;
			input = $(input_id);
			filter = input.val().toUpperCase();
			ul = document.getElementById(list_id);
			li = ul.getElementsByTagName("li");
			for (i = 0; i < li.length; i++) {
				a = li[i].getElementsByTagName("span")[0];
				if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "";
				} else {
					li[i].style.display = "none";
				}
			}
		}

		const barangay = (city) => {
			switch(city) {
				case 'Alaminos - Pangasinan':
					return [
						"Alos",
						"Amandiego",
						"Amangbangan",
						"Balangobong",
						"Balayang",
						"Bisocol",
						"Bolaney",
						"Baleyadaan",
						"Bued",
						"Cabatuan",
						"Cayucay",
						"Dulacac",
						"Inerangan",
						"Landoc",
						"Linmansangan",
						"Lucap",
						"Maawi",
						"Macatiw",
						"Magsaysay",
						"Mona",
						"Palamis",
						"Pandan",
						"Pangapisan",
						"Poblacion",
						"Pocal-Pocal",
						"Pogo",
						"Polo",
						"Quibuar",
						"Sabangan",
						"San Antonio",
						"San Jose",
						"San Roque",
						"San Vicente",
						"Santa Maria",
						"Tanaytay",
						"Tangcarang",
						"Tawintawin",
						"Telbang",
						"Victoria",
					];
				break;
				case 'Angeles - Pampanga':
					return [
						"Agapito del Rosario",
						"Amsic",
						"Anunas",
						"Balibago",
						"Capaya",
						"Claro M. Recto",
						"Cuayan",
						"Cutcut",
						"Cutud",
						"Lourdes North West",
						"Lourdes Sur (Talimundoc)",
						"Lourdes Sur East",
						"Malabañas",
						"Margot",
						"Marisol (Ninoy Aquino)",
						"Mining",
						"Pampang (Santo Niño)",
						"Pandan",
						"Pulungbulo",
						"Pulung Cacutud",
						"Pulung Maragul",
						"Salapungan",
						"San José",
						"San Nicolas",
						"Santa Teresita",
						"Santa Trinidad",
						"Santo Cristo",
						"Santo Domingo",
						"Santo Rosario (Población)",
						"Sapalibutad",
						"Sapangbato",
						"Tabun",
						"Virgen Delos Remedios",
					];
				break;
				case 'Antipolo - Rizal':
					return [
						"Beverly Hills",
						"Bagong Nayon",
						"Calawis",
						"Cupang",
						"Dela Paz",
						"Mambugan",
						"Mayamot Dalig",
						"Muntindilaw",
						"Inarawan",
						"San Isidro",
						"San Jose",
						"San Juan",
						"San Luis",
						"San Roque",
						"Sta. Cruz",
					];
				break;
				case 'Bacolod - Negros Occidental':
					return [
						"Alangilan",
						"Alijis",
						"Banago",
						"Barangay 1 (Población)",
						"Barangay 2 (Población)",
						"Barangay 3 (Población)",
						"Barangay 4 (Población)",
						"Barangay 5 (Población)",
						"Barangay 6 (Población)",
						"Barangay 7 (Población)",
						"Barangay 8 (Población)",
						"Barangay 9 (Población)",
						"Barangay 10 (Población)",
						"Barangay 11 (Población)",
						"Barangay 12 (Población)",
						"Barangay 13 (Población)",
						"Barangay 14 (Población)",
						"Barangay 15 (Población)",
						"Barangay 16 (Población)",
						"Barangay 17 (Población)",
						"Barangay 18 (Población)",
						"Barangay 19 (Población)",
						"Barangay 20 (Población)",
						"Barangay 21 (Población)",
						"Barangay 22 (Población)",
						"Barangay 23 (Población)",
						"Barangay 24 (Población)",
						"Barangay 25 (Población)",
						"Barangay 26 (Población)",
						"Barangay 27 (Población)",
						"Barangay 28 (Población)",
						"Barangay 29 (Población)",
						"Barangay 30 (Población)",
						"Barangay 31 (Población)",
						"Barangay 32 (Población)",
						"Barangay 33 (Población)",
						"Barangay 34 (Población)",
						"Barangay 35 (Población)",
						"Barangay 36 (Población)",
						"Barangay 37 (Población)",
						"Barangay 38 (Población)",
						"Barangay 39 (Población)",
						"Barangay 40 (Población)",
						"Barangay 41 (Población)",
						"Bata",
						"Cabug",
						"Estefanía",
						"Felisa",
						"Granada",
						"Handumanan",
						"Mandalagan",
						"Mansilingan",
						"Montevista",
						"Pahanocoy",
						"Punta Taytay",
						"Singcang-Airport",
						"Sum-ag",
						"Taculing",
						"Tangub",
						"Villamonte",
						"Vista Alegre",
					];
				break;
				case 'Bago - Negros Occidental':
					return [
						"Abuanan",
						"Alianza",
						"Atipuluan",
						"Bacong-Montilla",
						"Bagroy",
						"Balingasag",
						"Binubuhan",
						"Busay",
						"Calumangan",
						"Caridad",
						"Don Jorge L. Araneta",
						"Dulao",
						"Ilijan",
						"Lag-Asan",
						"Ma-ao",
						"Mailum",
						"Malingin",
						"Napoles",
						"Pacol",
						"Poblacion",
						"Sagasa",
						"Tabunan",
						"Taloc",
						"Sampinit",
					];
				break;
				case 'Baguio - Benguet':
					return [
						"A. Bonifacio-Caguioa-Rimando (ABCR)",
						"Abanao-Zandueta-Kayong-Chugum-Otek (AZKCO)",
						"Alfonso Tabora",
						"Ambiong",
						"Andres Bonifacio (Lower Bokawkan)",
						"Apugan-Loakan",
						"Asin Road",
						"Atok Trail",
						"Aurora Hill Proper (Malvar-Sgt. Floresca)",
						"Aurora Hill, North Central",
						"Aurora Hill, South Central",
						"Bagong Lipunan (Market Area)",
						"Bakakeng Central",
						"Bakakeng North",
						"Bal-Marcoville (Marcoville)",
						"Balsigan",
						"Bayan Park East",
						"Bayan Park Village",
						"Bayan Park West (Bayan Park)",
						"BGH Compound",
						"Brookside",
						"Brookspoint",
						"Cabinet Hill-Teacher's Camp",
						"Camdas Subdivision",
						"Camp 7",
						"Camp 8",
						"Camp Allen",
						"Campo Filipino",
						"City Camp Central",
						"City Camp Proper",
						"Country Club Village",
						"Cresencia Village",
						"Dagsian, Lower",
						"Dagsian, Upper",
						"Dizon Subdivision",
						"Dominican Hill-Mirador",
						"Dontogan",
						"DPS Compound",
						"Engineers' Hill",
						"Fairview Village",
						"Ferdinand (Happy Homes-Campo Sioco)",
						"Fort del Pilar",
						"Gabriela Silang",
						"General Emilio F. Aguinaldo (Quirino‑Magsaysay, Lower)",
						"General Luna, Upper",
						"General Luna, Lower",
						"Gibraltar",
						"Greenwater Village",
						"Guisad Central",
						"Guisad Sorong",
						"Happy Hollow",
						"Happy Homes (Happy Homes-Lucban)",
						"Harrison-Claudio Carantes",
						"Hillside",
						"Holy Ghost Extension",
						"Holy Ghost Proper",
						"Honeymoon (Honeymoon-Holy Ghost)",
						"Imelda R. Marcos (La Salle)",
						"Imelda Village",
						"Irisan",
						"Kabayanihan",
						"Kagitingan",
						"Kayang Extension",
						"Kayang-Hilltop",
						"Kias",
						"Legarda-Burnham-Kisad",
						"Liwanag-Loakan",
						"Loakan Proper",
						"Lopez Jaena",
						"Lourdes Subdivision Extension",
						"Lourdes Subdivision, Lower",
						"Lourdes Subdivision, Proper",
						"Lualhati",
						"Lucnab",
						"Magsaysay Private Road",
						"Magsaysay, Lower",
						"Magsaysay, Upper",
						"Malcolm Square-Perfecto (Jose Abad Santos)",
						"Manuel A. Roxas",
						"Market Subdivision, Upper",
						"Middle Quezon Hill Subdivision (Quezon Hill Middle)",
						"Military Cut-off",
						"Mines View Park",
						"Modern Site, East",
						"Modern Site, West",
						"MRR-Queen of Peace",
						"New Lucban",
						"Outlook Drive",
						"Pacdal",
						"Padre Burgos",
						"Padre Zamora",
						"Palma-Urbano (Cariño-Palma)",
						"Phil-Am",
						"Pinget",
						"Pinsao Pilot Project",
						"Pinsao Proper",
						"Poliwes",
						"Pucsusan",
						"Quezon Hill Proper",
						"Quezon Hill, Upper",
						"Quirino Hill, East",
						"Quirino Hill, Lower",
						"Quirino Hill, Middle",
						"Quirino Hill, West",
						"Quirino-Magsaysay, Upper (Upper QM)",
						"Rizal Monument Area",
						"Rock Quarry, Lower",
						"Rock Quarry, Middle",
						"Rock Quarry, Upper",
						"Saint Joseph Village",
						"Salud Mitra",
						"San Antonio Village",
						"San Luis Village",
						"San Roque Village",
						"San Vicente",
						"Sanitary Camp, North",
						"Sanitary Camp, South",
						"Santa Escolastica",
						"Santo Rosario",
						"Santo Tomas Proper",
						"Santo Tomas School Area",
						"Scout Barrio",
						"Session Road Area",
						"Slaughter House Area (Santo Niño Slaughter)",
						"SLU-SVP Housing Village",
						"South Drive",
						"Teodora Alonzo",
						"Trancoville",
						"Victoria Village",
					];
				break;
				case 'Bais - Negros Oriental':
					return [
						"Barangay I (Poblacion)",
						"Barangay II (Poblacion)",
						"Basak",
						"Biñohon",
						"Cabanlutan",
						"Calasga-an",
						"Cambagahan",
						"Cambaguio",
						"Cambanjao",
						"Cambuilao",
						"Canlargo",
						"Capiñahan",
						"Consolacion",
						"Dansulan",
						"Hangyad",
						"La Paz",
						"Lo-oc",
						"Lonoy",
						"Mabunao",
						"Manlipac",
						"Mansangaban",
						"Okiot",
						"Olympia",
						"Panala-an",
						"Panam-angan",
						"Rosario",
						"Sab-ahan",
						"San Isidro",
						"Katacgahan (Tacgahan)",
						"Tagpo",
						"Talungon",
						"Tamisu",
						"Tamogong",
						"Tangculogan",
						"Valencia",
					];
				break;
				default:
					return [];
				break;
			}
		}
	</script>
@endpush