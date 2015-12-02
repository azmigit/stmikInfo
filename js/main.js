var app = angular.module("app",['ui.router']); // jangan lupa kita inject module ui.router

app.config(function($stateProvider, $urlRouterProvider){
	$stateProvider
			.state("dashboard",{ // nama routing, digunakan sebagai referensi saat ganti halaman
				url: "/dashboard", // url yang akan ditampilkan pada bagian alamat di browser
				templateUrl : "view/home.php"
			})
			.state("mahasiswa",{ // nama routing, digunakan sebagai referensi saat ganti halaman
				url: "/mahasiswa", // url yang akan ditampilkan pada bagian alamat di browser
				templateUrl : "view/mahasiswa.php"
			})
			.state("tmahasiswa",{ // nama routing, digunakan sebagai referensi saat ganti halaman
				url: "/tmahasiswa", // url yang akan ditampilkan pada bagian alamat di browser
				templateUrl : "view/tambahMahasiswa.php"
			})
			
	$urlRouterProvider.otherwise("dashboard");
});

app.controller("appCtrl",function($scope,$state){
	//$state.go("dashboard");
});