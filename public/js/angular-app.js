var app = angular.module('app',['ui.router','ngAnimate','datatables'])
    .constant('PAKET_KATEGORI_URL','api/paket-kategori/')
    .constant('PAKET_URL','api/paket/')
    .value('Month',[
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ])
    .factory('Token',function ($q,$http) {
        var defer = $q.defer();
        $http.get('/api/token').then(function (res) {
            defer.resolve(res.data);
        });
        return defer.promise;
    })
    .service('TabContent',function ($http,$q) {
        var defer = $q.defer();
        $http.get('api/paket-kategori').then(function (response) {
            defer.resolve(response.data);
        });
        return defer.promise;
    })
    .service('Collection',function ($q, $http) {
        this.url = null;
        this.setUrl = function (url) {
            this.url = url
        };

        this.getData = function () {
            var defer = $q.defer();
            $http.get(this.url).then(function (response){
                defer.resolve(response.data);
            });
           return defer.promise;
        };
        return this;
    })
    .factory('Paket', function () {
        this.data = null;
        this.setData = function (data) {
            this.data = data;
        };
        this.getData = function () {
            return this.data;
        };
        return this;
    })
    .factory('Hotel', function () {
        this.data = null;
        this.setData = function (data) {
            this.data = data;
        };
        this.getData = function () {
            return this.data;
        };
        return this;
    })

    .config(function ($stateProvider,$urlRouterProvider) {
        $stateProvider
            .state('paket-list',{
                url: '',
                templateUrl: 'templates/tab-choice.html',
                controller: 'TabsController'
            })
            .state('pesan',{
                url:'/paket_terpilih/:paketId/pesan',
                templateUrl: 'templates/pesan.html',
                controller: 'PaketPesanController'
            })
            .state('paket-list.data-table',{
                url: '/:id',
                templateUrl: 'templates/data-tables-paket.html',
                controller: 'DataTableController'
            })
            .state('paket-details',{
                url:'/paket/:paketId',
                templateUrl: 'templates/paket-details.html',
                controller: 'PaketDetailsController'
            })
            .state('paket-details.home',{
                url: '',
                templateUrl: 'templates/paket-details-home-tabs.html',
                controller: 'PaketDetailsHomeController'
            })
            .state('paket-details.home.penerbangan',{
                url: '/penerbangan',
                templateUrl: 'templates/penerbangan.html',
                controller: 'PaketPenerbanganDetailsController'
            })
            .state('paket-details.home.agenda',{
                url: '/agenda',
                templateUrl: 'templates/persyaratan.html',
                controller: 'PaketAgendaDetailsController'
            })
            .state('paket-details.home.fasilitas',{
                url: '/fasilitas',
                templateUrl: 'templates/persyaratan.html',
                controller: 'PaketAgendaDetailsController'
            })
            .state('paket-details.home.persyaratan',{
                url: '/persyaratan',
                templateUrl: 'templates/persyaratan.html',
            })
            .state('paket-details.pesawat',{
                url: '/pesawat',
                templateUrl: 'templates/pesawat.html',
                controller: 'PaketDetailsPesawatController'
            })
            .state('paket-details.hotel-mekah',{
                url: '/hotel-mekah',
                templateUrl: 'templates/hotel.html',
                controller: 'PaketDetailsHotelMekahController'
            })
            .state('paket-details.hotel-madinah',{
                url: '/hotel-madinah',
                templateUrl: 'templates/hotel.html',
                controller: 'PaketDetailsHotelMadinahController'
            })
            .state('paket-details.hotel-mekah.review',{
                url: '/review',
                templateUrl: 'templates/hotel-review.html',
                controller: 'HotelReviewController'
            })
            .state('paket-details.hotel-mekah.lokasi',{
                url: '/lokasi',
                templateUrl: 'templates/hotel-lokasi.html',
                controller: 'HotelLokasiController'
            })
            .state('paket-details.hotel-mekah.foto',{
                url: '/photos',
                templateUrl: 'templates/hotel-foto.html',
                controller: 'HotelFotoController'
            })
            .state('paket-details.hotel-mekah.fasilitas',{
                url: '/fasilitas',
                templateUrl: 'templates/hotel-fasilitas.html',
                controller: 'HotelFasilitasController'
            })
            .state('paket-details.hotel-madinah.review',{
                url: '/review',
                templateUrl: 'templates/hotel-review.html',
                controller: 'HotelReviewController'
            })
            .state('paket-details.hotel-madinah.lokasi',{
                url: '/lokasi',
                templateUrl: 'templates/hotel-lokasi.html',
                controller: 'HotelLokasiController'
            })
            .state('paket-details.hotel-madinah.foto',{
                url: '/photos',
                templateUrl: 'templates/hotel-foto.html',
                controller: 'HotelFotoController'
            })
            .state('paket-details.hotel-madinah.fasilitas',{
                url: '/fasilitas',
                templateUrl: 'templates/hotel-fasilitas.html',
                controller: 'HotelFasilitasController'
            });
        $urlRouterProvider.otherwise('/1');
    })
    .directive("compareTo", function() {
        return {
            require: "ngModel",
            scope: {
                otherModelValue: "=compareTo"
            },
            link: function(scope, element, attributes, ngModel) {

                ngModel.$validators.compareTo = function(modelValue) {
                    return modelValue == scope.otherModelValue;
                };

                scope.$watch("otherModelValue", function() {
                    ngModel.$validate();
                });
            }
        };
    })
    .directive("unique", function($http) {
        return {
            require: "ngModel",
            restrict: 'A',
            link: function(scope, element, attributes, ngModel) {
                element.bind('change blur', function (e) {
                    if(element.val() != ''){
                        ngModel.$setValidity('unique', true);
                        $http.get("/api/unique/" + element.val()).success(function(data) {
                            if(data.status){
                                ngModel.$setValidity('unique',true);
                            } else {
                                ngModel.$setValidity('unique',false);
                            }
                        });
                    }
                });
            }
        };
    })
    .directive('progressBar',['$templateCache',function ($templateCache) {
        return {
            restrict: 'E',
            replace: false,
            templateUrl: 'templates/progress.html',
            scope: {
                progress: '@',
                message: '@'
            }
        }
    }])
    .controller('PaketPesanController',function ($scope,$stateParams,Collection,PAKET_URL,Month,Token) {
        Token.then(function (data) {
            $scope.token = data.data;
            console.log($scope.token);
        });

        $scope.id = $stateParams.paketId;
        $scope.totalHarga = 0;
        Collection.setUrl(PAKET_URL + $scope.id);
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            console.log($scope.data);
            var waktu = new Date($scope.data.waktu);
            var tahun = waktu.getFullYear();
            var bulan = Month[waktu.getMonth()];
            var tanggal = waktu.getDate() + 1;
            $scope.data.waktu = tanggal + ' ' + bulan + ' ' + tahun;
        });
        $scope.showModalConfirmation = function () {
            $('#confirmationModal').modal('show')
        }
    })
    .controller('HotelReviewController',function ($scope, $stateParams,Collection,PAKET_URL,$state) {
        $scope.paketId = $stateParams.paketId;
        if($state.current.name == 'paket-details.hotel-mekah.review'){
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMekah/review');
        } else {
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMadinah/review');
        }
        Collection.getData().then(function (data) {
            $scope.data = data.data;
        })
    })
    .controller('HotelFotoController',function ($scope, $stateParams,$state,Collection,PAKET_URL) {
        $scope.paketId = $stateParams.paketId;
        if($state.current.name == 'paket-details.hotel-mekah.foto'){
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMekah/photos');
        } else {
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMadinah/photos');
        }
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            var photos = [];
            for(var i = 0;i<$scope.data.length;i++){
                var obj = {
                    img: 'p/' + $scope.data[i].hashcode
                };
                photos.push(obj);
            }
            console.log(photos);
            $('.fotorama').fotorama({
                data: photos
            });
        })
    })
    .controller('HotelFasilitasController',function ($scope, $stateParams) {

    })
    .controller('HotelLokasiController',function ($scope, $stateParams) {

    })
    .controller('PaketDetailsHomeController',function ($scope,$location,$stateParams) {
        $scope.id = $stateParams.paketId;
        $scope.changeTabs = function (url) {
            $location.path('/paket/' + $scope.id + '/' + url);
        }
    })
    .controller('PaketDetailsPesawatController',function ($scope, $location, Collection,PAKET_URL,$stateParams) {
        $scope.paketId = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.paketId + '/pesawat');
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            var photos = [];
            for(var i = 0;i<$scope.data.photos.length;i++){
                var obj = {
                    img: 'p/' + $scope.data.photos[i].hashcode
                };
                photos.push(obj);
            }
            $('.fotorama').fotorama({
                data: photos
            });
        })
    })
    .controller('PaketDetailsHotelMekahController',function ($scope, $location, Collection,PAKET_URL,$stateParams) {
        $scope.paketId = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMekah');
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            console.log($scope.data);
        });
        $scope.changeTabs = function (url) {
            $location.path('/paket/' + $scope.id + '/hotel-mekah/' + url);
        };
        $location.path('/paket/' + $scope.id + '/hotel-mekah/review');
    })
    .controller('PaketDetailsHotelMadinahController',function ($scope, $location, Collection,PAKET_URL,$stateParams) {
        $scope.paketId = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMadinah');
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            console.log($scope.data);
        });
        $scope.changeTabs = function (url) {
            $location.path('/paket/' + $scope.id + '/hotel-madinah/' + url);
        };
        $location.path('/paket/' + $scope.id + '/hotel-madinah/review');
    })
    .controller('ProgressController',function ($scope) {

    })
    .controller('PaketPenerbanganDetailsController',function ($scope,Collection,$stateParams,PAKET_URL,Paket) {
        $scope.id = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.id + '/penerbangan');
        Collection.getData().then(function (data) {
            if(data.status){
                $scope.data = data.data;
            } else {
                alert('Something Error');
            }
        })
    })
    .controller('PaketDetailsController',function ($scope,$stateParams,$http,$q,PAKET_URL,$location,$state,Paket) {
        $scope.id = $stateParams.paketId;
        var defered = $q.defer();
        $http.get(PAKET_URL + $scope.id).then(function (response) {
            defered.resolve(response.data);
        });
        defered.promise.then(function (data) {
           $scope.data = data.data;
            Paket.setData($scope.data);
            console.log(Paket.getData());
        });

        $scope.changeTabs = function (url) {
            $location.path('/paket/' + $scope.id + '/' + url);
        }

    })
    .controller('TabsController',function ($scope, TabContent,$location) {
        TabContent.then(function (data) {
            $scope.tabs = data.data;
            console.log($scope.tabs);
            $scope.tabs[0].active = true;
            $scope.tabs[0].icon = 'fa fa-money';
            $scope.tabs[1].icon = 'fa fa-car';
            $scope.tabs[2].icon = 'fa fa-trophy';
        });

        $scope.changePage = function (id) {
            $location.path('/' + id);
        };
        $location.path('/1');
    })
    .controller('DataTableController',function ($scope, TabContent,$location,DTOptionsBuilder,DTColumnDefBuilder,$http,$q,$stateParams) {


        $scope.id = $stateParams.id;
        $scope.dtColumnDefs = [

        ];
        var defer = $q.defer();
        $scope.dtOptions = DTOptionsBuilder.newOptions().withPaginationType('full_numbers').withDisplayLength(10);
        $http.get('api/paket-kategori/' + $scope.id +'/getPaket').then(function (response) {
            defer.resolve(response.data);
        });

        defer.promise.then(function (data) {
           $scope.data = data.data;
        })
    });
