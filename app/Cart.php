<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = ['product_id', 'quantity', 'variants_1', 'variants_2', 'variants_3', 'price'];


	public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public static function session()
	{
		$sessions = session('cart', []);

		if (empty($sessions)) {
			return [
				'result' => false,
				'message' => 'Session is Empty'
			];
		}

		return  [
			'result' => true,
			'data' => static::whereIn('id', $sessions)->get()
		];
	}

	public static function cities()
	{
		return [
			"Alaminos - Pangasinan",
			"Angeles - Pampanga",
			"Antipolo - Rizal",
			"Bacolod - Negros Occidental",
			"Bago - Negros Occidental",
			"Baguio - Benguet",
			"Bais - Negros Oriental",
			"Balanga - Bataan",
			"Batangas - Batangas",
			"Bayawan - Negros Oriental",
			"Biñan - Laguna",
			"Bislig - Surigao del Sur",
			"Butuan - Agusan del Norte",
			"Cabanatuan - Nueva Ecija",
			"Cabuyao - Laguna",
			"Cadiz - Negros Occidental",
			"Cagayan de Oro - Misamis Oriental",
			"Calamba - Laguna",
			"Calapan - Mindoro Oriental",
			"Calbayog - Samar",
			"Caloocan - Metro Manila",
			"Candon - Ilocos Sur",
			"Canlaon - Negros Oriental",
			"Cauayan - Isabela",
			"Cavite - Cavite",
			"Cebu - Cebu",
			"Cotabato - Maguindanao",
			"Dagupan - Pangasinan",
			"Danao - Cebu",
			"Dapitan - Zamboanga del Norte",
			"Dasmariñas - Cavite",
			"Davao - Davao del Sur",
			"Digos - Davao del Sur",
			"Dipolog - Zamboanga del Norte",
			"Dumaguete - Negros Oriental",
			"Escalante - Negros Occidental",
			"Gapan - Nueva Ecija",
			"General Santos - South Cotabato",
			"Gingoog - Misamis Oriental",
			"Himamaylan - Negros Occidental",
			"Iligan - Lanao del Norte",
			"Iloilo - Iloilo",
			"Iriga - Camarines Sur",
			"Isabela - Basilan",
			"Kabankalan - Negros Occidental",
			"Kidapawan - Cotabato",
			"Koronadal - South Cotabato",
			"La Carlota - Negros Occidental",
			"Laoag - Ilocos Norte",
			"Lapu-Lapu - Cebu",
			"Las Piñas - Metro Manila",
			"Legazpi - Albay",
			"Ligao - Albay",
			"Lipa - Batangas",
			"Lucena - Quezon",
			"Maasin - Southern Leyte",
			"Makati - Metro Manila",
			"Malaybalay - Bukidnon",
			"Malolos - Bulacan",
			"Mandaluyong - Metro Manila",
			"Mandaue - Cebu",
			"Manila - Metro Manila",
			"Marawi - Lanao del Sur",
			"Marikina - Metro Manila",
			"Masbate - Masbate",
			"Meycauayan - Bulacan	",
			"Muntinlupa - Metro Manila",
			"Muñoz - Nueva Ecija",
			"Naga - Camarines Sur",
			"Naga - Cebu",
			"Navotas - Metro Manila",
			"Olongapo - Zambales",
			"Ormoc - Leyte",
			"Oroquieta - Misamis Occidental",
			"Ozamiz - Misamis Occidental",
			"Pagadian - Zamboanga del Sur",
			"Palayan - Nueva Ecija	",
			"Panabo - Davao del Norte",
			"Parañaque - Metro Manila",
			"Pasay - Metro Manila",
			"Pasig - Metro Manila",
			"Passi - Iloilo",
			"Puerto Princesa - Palawan",
			"Quezon - Metro Manila",
			"Roxas - Capiz",
			"Sagay - Negros Occidental",
			"Samal - Davao del Norte",
			"San Carlos - Negros Occidental",
			"San Carlos - Pangasinan",
			"San Fernando - La Union",
			"San Fernando - Pampanga",
			"San Jose - Nueva Ecija",
			"San Jose del Monte - Bulacan",
			"San Juan - Metro Manila",
			"San Pablo - Laguna",
			"Santa Rosa - Laguna",
			"Santiago - Isabela",
			"Silay - Negros Occidental",
			"Sipalay - Negros Occidental",
			"Sorsogon - Sorsogon",
			"Surigao - Surigao del Norte",
			"Tabaco - Albay",
			"Tacloban - Leyte",
			"Tacurong - Sultan Kudarat",
			"Tagaytay - Cavite",
			"Tagbilaran - Bohol",
			"Taguig - Metro Manila",
			"Tagum - Davao del Norte",
			"Talisay - Cebu",
			"Talisay - Negros Occidental",
			"Tanauan - Batangas",
			"Tangub - Misamis Occidental",
			"Tanjay - Negros Oriental",
			"Tarlac - Tarlac",
			"Tayabas - Quezon",
			"Toledo - Cebu",
			"Trece Martires - Cavite",
			"Tuguegarao - Cagayan",
			"Urdaneta - Pangasinan",
			"Valencia - Bukidnon",
			"Valenzuela - Metro Manila",
			"Victorias - Negros Occidental",
			"Vigan - Ilocos Sur",
			"Zamboanga - Zamboanga del Sur",
		];
	}
}
