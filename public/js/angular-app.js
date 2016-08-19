var app = angular.module('app', ['ui.router', 'ngAnimate', 'datatables'])
    .run(function (DTDefaultOptions) {
        DTDefaultOptions.setLoadingTemplate('<i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
    })
    .run(function (Currency,$rootScope) {
        Currency.get().then(function (data) {
            Currency.set(data.date,data.rates.IDR);
        });
    })
    .constant('PAKET_KATEGORI_URL', '/api/paket-kategori/')
    .constant('PAKET_URL', '/api/paket/')
    .value('Month', [
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
    .factory('Currency', function ($q, $http) {
        var defer = $q.defer();
        this.date = null;
        this.IDR = null;

        this.set = function (date,IDR) {
            this.date = date;
            this.IDR = IDR;
        };

        this.get = function () {
            $http.get('http://api.fixer.io/latest?base=USD&symbols=USD,IDR').then(function (res) {
                defer.resolve(res.data);
            });
            return defer.promise;
        };
        return this;
    })
    .factory('Auth', function ($q, $http) {
        var defer = $q.defer();
        this.url = null;
        this.setUrl = function (url) {
            this.url = url;
        };

        this.check = function () {
            $http.get(this.url).then(function (res) {
                defer.resolve(res.data);
            });
            return defer.promise;
        };

        return this;
    })
    .service('TabContent', function ($http, $q) {
        var defer = $q.defer();
        $http.get('api/paket-kategori').then(function (response) {
            defer.resolve(response.data);
        });
        return defer.promise;

    })
    .service('Collection', function ($q, $http) {
        this.url = null;
        this.setUrl = function (url) {
            this.url = url
        };

        this.getData = function () {
            var defer = $q.defer();
            $http.get(this.url).then(function (response) {
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
    .directive('iFrane',function () {
        return {
            restrict: 'E',
        }
    })
    .config(function ($stateProvider, $urlRouterProvider) {
        $stateProvider
            .state('paket-list', {
                url: '',
                templateUrl: 'templates/tab-choice.html',
                controller: 'TabsController'
            })
            .state('pesan', {
                url: '/paket_terpilih/:paketId/pesan',
                templateUrl: 'templates/pesan.html',
                controller: 'PaketPesanController',
                resolve: {
                    checkAuth: function (Auth, $q, $stateParams) {
                        var defer = $q.defer();
                        Auth.setUrl('/api/check?paketId=' + $stateParams.paketId);
                        Auth.check().then(function (data) {
                            if (data.status) {
                                var redirectTo = data.redirectTo;
                                console.log(redirectTo);
                                window.location.href = redirectTo;
                            } else {
                                defer.resolve();
                            }
                        });
                        return defer.promise;
                    }
                }
            })
            .state('paket-list.data-table', {
                url: '/:id?jumlah_jamaah&embarkasi&tanggal_keberangkatan&flexible_date&hotel_mekah&hotel_madinah',
                templateUrl: 'templates/data-tables-paket.html',
                controller: 'DataTableController'
            })
            .state('paket-details', {
                url: '/paket/:paketId',
                templateUrl: 'templates/paket-details.html',
                controller: 'PaketDetailsController'
            })
            .state('paket-details.home', {
                url: '',
                templateUrl: 'templates/paket-details-home-tabs.html',
                controller: 'PaketDetailsHomeController'
            })
            .state('paket-details.home.penerbangan', {
                url: '/penerbangan',
                templateUrl: 'templates/penerbangan.html',
                controller: 'PaketPenerbanganDetailsController'
            })
            .state('paket-details.home.agenda', {
                url: '/agenda',
                templateUrl: 'templates/agenda.html',
                controller: 'PaketAgendaDetailsController'
            })
            .state('paket-details.home.fasilitas', {
                url: '/fasilitas',
                templateUrl: 'templates/fasilitas.html',
                controller: 'PaketFasilitasDetailsController'
            })
            .state('paket-details.home.persyaratan', {
                url: '/persyaratan',
                templateUrl: 'templates/persyaratan.html',
            })
            .state('paket-details.pesawat', {
                url: '/pesawat',
                templateUrl: 'templates/pesawat.html',
                controller: 'PaketDetailsPesawatController'
            })
            .state('paket-details.hotel-mekah', {
                url: '/hotel-mekah',
                templateUrl: 'templates/hotel.html',
                controller: 'PaketDetailsHotelMekahController'
            })
            .state('paket-details.hotel-madinah', {
                url: '/hotel-madinah',
                templateUrl: 'templates/hotel.html',
                controller: 'PaketDetailsHotelMadinahController'
            })
            .state('paket-details.hotel-mekah.review', {
                url: '/review',
                templateUrl: 'templates/hotel-review.html',
                controller: 'HotelReviewController'
            })
            .state('paket-details.hotel-mekah.lokasi', {
                url: '/lokasi',
                templateUrl: 'templates/hotel-lokasi.html',
                controller: 'HotelMekahLokasiController'
            })
            .state('paket-details.hotel-mekah.foto', {
                url: '/photos',
                templateUrl: 'templates/hotel-foto.html',
                controller: 'HotelFotoController'
            })
            .state('paket-details.hotel-mekah.fasilitas', {
                url: '/fasilitas',
                templateUrl: 'templates/hotel-fasilitas.html',
                controller: 'HotelMekahFasilitasController'
            })
            .state('paket-details.hotel-madinah.review', {
                url: '/review',
                templateUrl: 'templates/hotel-review.html',
                controller: 'HotelReviewController'
            })
            .state('paket-details.hotel-madinah.lokasi', {
                url: '/lokasi',
                templateUrl: 'templates/hotel-lokasi.html',
                controller: 'HotelMadinahLokasiController'
            })
            .state('paket-details.hotel-madinah.foto', {
                url: '/photos',
                templateUrl: 'templates/hotel-foto.html',
                controller: 'HotelFotoController'
            })
            .state('paket-details.hotel-madinah.fasilitas', {
                url: '/fasilitas',
                templateUrl: 'templates/hotel-fasilitas.html',
                controller: 'HotelMadinahFasilitasController'
            });
        $urlRouterProvider.otherwise('/1');
    })
    .directive("compareTo", function () {
        return {
            require: "ngModel",
            scope: {
                otherModelValue: "=compareTo"
            },
            link: function (scope, element, attributes, ngModel) {

                ngModel.$validators.compareTo = function (modelValue) {
                    return modelValue == scope.otherModelValue;
                };

                scope.$watch("otherModelValue", function () {
                    ngModel.$validate();
                });
            }
        };
    })
    .directive("unique", function ($http) {
        return {
            require: "ngModel",
            restrict: 'A',
            link: function (scope, element, attributes, ngModel) {
                element.bind('change blur', function (e) {
                    if (element.val() != '') {
                        ngModel.$setValidity('unique', true);
                        $http.get("/api/unique/" + element.val()).success(function (data) {
                            if (data.status) {
                                ngModel.$setValidity('unique', true);
                            } else {
                                ngModel.$setValidity('unique', false);
                            }
                        });
                    }
                });
            }
        };
    })
    .directive('progressBar', ['$templateCache', function ($templateCache) {
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
    .controller('PaketPesanController', function ($scope, $stateParams, Collection, PAKET_URL, Month, Token, Auth) {
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
    .controller('HotelReviewController', function ($scope, $stateParams, Collection, PAKET_URL, $state) {
        $scope.paketId = $stateParams.paketId;
        if ($state.current.name == 'paket-details.hotel-mekah.review') {
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMekah/review');
        } else {
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMadinah/review');
        }
        Collection.getData().then(function (data) {
            $scope.data = data.data;
        })
    })
    .controller('PaketFasilitasDetailsController',function ($http,$scope, Collection, PAKET_URL, $stateParams) {
        Collection.setUrl(PAKET_URL + $stateParams.paketId + '/fasilitas');
        Collection.getData().then(function (res) {
            $scope.data = res.data;
            $http.get('/fasilitas?json=true').then(function (res) {
                $scope.fasilitas = res.data.data;
                console.log($scope.data[0]);
                var curr = 0;
                for (var i =0;i<$scope.fasilitas.length;i++){
                    if($scope.fasilitas[i].id == $scope.data[curr].id){
                        $scope.fasilitas[i].choice = true;
                        curr++;
                    } else {
                        $scope.fasilitas[i].choice = false;
                    }
                    if(curr >= $scope.data.length){
                        break;
                    }
                }
                console.log($scope.fasilitas);
            });


        });

        $http.get('/fasilitas?json=true').then(function (res) {
            $scope.fasilitas = res.data;
            console.log($scope.fasilitas);
        })
    })
    .controller('PaketAgendaDetailsController',function ($scope,PAKET_URL,Collection,$stateParams) {
        $scope.paketId = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.paketId + '/agenda');
        Collection.getData().then(function (res) {
            $scope.data = res.data;
            // console.log($scope.data);
            var l = $scope.data.length;
            var t = 100;
            var i = 0;
            var arr = [];
            while (l>0){
                arr[i] = {
                    width: (l>6) ? '96%' : (l*(16)) + '%',
                    height: (typeof arr[i-1] == 'undefined') ? t : arr[i-1].height + 252
                };
                l = l - 6;
                i++;
            }
            $scope.lines = arr;
            console.log(arr);
            // $http.get('/fasilitas?json=true').then(function (res) {
            //     $scope.fasilitas = res.data;
            // })
        });

    })
    .controller('HotelFotoController', function ($scope, $stateParams, $state, Collection, PAKET_URL) {
        $scope.paketId = $stateParams.paketId;
        if ($state.current.name == 'paket-details.hotel-mekah.foto') {
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMekah/photos');
        } else {
            Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMadinah/photos');
        }
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            var photos = [];
            for (var i = 0; i < $scope.data.length; i++) {
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
    .controller('HotelMekahFasilitasController', function ($scope, $stateParams,Collection,$stateParams,PAKET_URL) {
        Collection.setUrl(PAKET_URL + $stateParams.paketId + '/hotelMekah/fasilitas');
        Collection.getData().then(function (res) {
            var arr = res.data;
            var curr = 0;
            var curr2 = -1;
            var y = [];
            for(var i = 0;i<arr.length;i++){
                if(curr != arr[i].hotel_fasilitas_category_id){
                    curr2++;
                    curr = arr[i].hotel_fasilitas_category_id;
                    y.push({
                        category_name: arr[i].category.name,
                        data: []
                    });
                }
                y[curr2].data.push(arr[i]);
            }
            $scope.fasilitas = y;
        })
    })
    .controller('HotelMadinahFasilitasController', function ($scope, $stateParams,Collection,$stateParams,PAKET_URL) {
        Collection.setUrl(PAKET_URL + $stateParams.paketId + '/hotelMadinah/fasilitas');
        Collection.getData().then(function (res) {
            var arr = res.data;
            var curr = 0;
            var curr2 = -1;
            var y = [];
            for(var i = 0;i<arr.length;i++){
                if(curr != arr[i].hotel_fasilitas_category_id){
                    curr2++;
                    curr = arr[i].hotel_fasilitas_category_id;
                    y.push({
                        category_name: arr[i].category.name,
                        data: []
                    });
                }
                y[curr2].data.push(arr[i]);
            }
            $scope.fasilitas = y;
        })
    })
    .controller('HotelMekahLokasiController', function ($scope, $stateParams,$sce,PAKET_URL,$stateParams,Collection) {
        Collection.setUrl(PAKET_URL + $stateParams.paketId + '/hotelMekah/lokasi');
        Collection.getData().then(function (res) {
            $scope.lokasi = res.data;
            $scope.lokasi.google_map_url = $sce.trustAsResourceUrl($scope.lokasi.google_map_url);
            console.log($sce.trustAsResourceUrl($scope.lokasi.google_map_url));
        })
    })
    .controller('HotelMadinahLokasiController', function ($scope, $stateParams,$sce) {

    })
    .controller('PaketDetailsHomeController', function ($scope, $location, $stateParams) {
        $scope.id = $stateParams.paketId;
        $scope.changeTabs = function (url) {
            $location.path('/paket/' + $scope.id + '/' + url);
        }
    })
    .controller('PaketDetailsPesawatController', function ($scope, $location, Collection, PAKET_URL, $stateParams) {
        $scope.paketId = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.paketId + '/pesawat');
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            var photos = [];
            for (var i = 0; i < $scope.data.photos.length; i++) {
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
    .controller('PaketDetailsHotelMekahController', function ($sce,$scope, $location, Collection, PAKET_URL, $stateParams) {
        $scope.paketId = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.paketId + '/hotelMekah');
        Collection.getData().then(function (data) {
            $scope.data = data.data;
            $scope.data.address.google_map_url = $sce.trustAsResourceUrl($scope.data.address.google_map_url);
            console.log($sce.trustAsResourceUrl($scope.data.address.google_map_url));
        });
        $scope.changeTabs = function (url) {
            $location.path('/paket/' + $scope.id + '/hotel-mekah/' + url);
        };
        $location.path('/paket/' + $scope.id + '/hotel-mekah/review');
    })
    .controller('PaketDetailsHotelMadinahController', function ($scope, $location, Collection, PAKET_URL, $stateParams) {
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
    .controller('ProgressController', function ($scope) {

    })
    .controller('PaketPenerbanganDetailsController', function ($scope, Collection, $stateParams, PAKET_URL, Paket) {
        $scope.id = $stateParams.paketId;
        Collection.setUrl(PAKET_URL + $scope.id + '/penerbangan');
        Collection.getData().then(function (data) {
            if (data.status) {
                $scope.data = data.data;
            } else {
                alert('Something Error');
            }
        })
    })
    .controller('PaketDetailsController', function (Month, $scope, $stateParams, $http, $q, PAKET_URL, $location, $state, Paket) {
        $scope.id = $stateParams.paketId;
        var defered = $q.defer();
        $http.get(PAKET_URL + $scope.id).then(function (response) {
            defered.resolve(response.data);
        });
        defered.promise.then(function (data) {
            $scope.data = data.data;
            Paket.setData($scope.data);
            var waktu = new Date($scope.data.waktu);
            var tahun = waktu.getFullYear();
            var bulan = Month[waktu.getMonth()];
            var tanggal = waktu.getDate() + 1;
            $scope.data.waktu = {
                tanggal: tanggal,
                tahun: tahun,
                bulan: bulan
            };
        });

        $scope.changeTabs = function (url) {
            $location.path('/paket/' + $scope.id + '/' + url);
        }

    })
    .controller('TabsController', function ($scope, TabContent, $location) {


        TabContent.then(function (data) {
            $scope.tabs = data.data;
            console.log($scope.tabs);
            $scope.tabs[0].active = true;
            $scope.tabs[0].icon = 'fa fa-money';
            $scope.tabs[1].icon = 'fa fa-car';
            $scope.tabs[2].icon = 'fa fa-trophy';
        });

        $scope.newSearchShow = function () {
            $('#newSearchModal').modal('show');
        };

        $scope.changePage = function (id) {
            $location.path('/' + id);
        };
        $location.path('/1');
    })
    .controller('DataTableController', function ($rootScope,Month, $scope, TabContent, $location, DTOptionsBuilder, $state, DTColumnDefBuilder, $http, $q, $stateParams) {
        $('.dropdown-toggle').dropdown();
        $rootScope.changeCurrency = function (curr) {
            $rootScope.curr = curr == 'IDR';
        };
        $scope.comparePackages = [];
        $scope.addToCompare = function (paket) {
            paket.isToCompare = true;
            $scope.comparePackages.push(paket);
            paket.index = $scope.comparePackages.indexOf(paket);
            console.log(paket);
        };
        $scope.removeFromCompare = function (index) {
            $scope.comparePackages[index].isToCompare = false;
            $scope.comparePackages.splice(index,1);
            $scope.comparePackages.forEach(function (x) {
                x.index = $scope.comparePackages.indexOf(x);
            });
        };
        $scope.id = $stateParams.id;
        $scope.dtColumnDefs = [];
        console.log($stateParams);
        var defer = $q.defer();
        $scope.dtOptions = DTOptionsBuilder.newOptions().withPaginationType('full_numbers').withDisplayLength(10);
        $http.get('api/paket-kategori/' + $scope.id + '/getPaket?' +
            ((typeof $stateParams.jumlah_jamaah) != 'undefined' ? '&jumlah_jamaah=' + $stateParams.jumlah_jamaah : '') +
            ((typeof $stateParams.flexible_date) != 'undefined' ? '&flexible_date=' + $stateParams.flexible_date : '') +
            ((typeof $stateParams.embarkasi) != 'undefined' ? '&embarkasi=' + $stateParams.embarkasi : '') +
            ((typeof $stateParams.tanggal_keberangkatan) != 'undefined' ? '&tanggal_keberangkatan=' + $stateParams.tanggal_keberangkatan : '') +
            ((typeof $stateParams.hotel_mekah) != 'undefined' ? '&hotel_mekah=' + $stateParams.hotel_mekah : '') +
            ((typeof $stateParams.hotel_madinah) != 'undefined' ? '&hotel_madinah=' + $stateParams.hotel_madinah : ''))
            .then(function (response) {
                defer.resolve(response.data);
            });

        defer.promise.then(function (data) {
            $scope.data = data.data;
            for (var i = 0; i < $scope.data.length; i++) {
                $scope.data[i].isToCompare = false;
                var waktu = new Date($scope.data[i].waktu);
                var tahun = waktu.getFullYear();
                var bulan = Month[waktu.getMonth()];
                var tanggal = waktu.getDate() + 1;
                $scope.data[i].waktu = {
                    tahun: tahun,
                    bulan: bulan,
                    tanggal: tanggal
                };
            }
            console.log($scope.data);
        })
    })
    .filter('rupiah', function (Currency) {
        return function (val) {
            val = val * Currency.IDR;
            while (/(\d+)(\d{3})/.test(val.toString())) {
                val = val.toString().replace(/(\d+)(\d{3})/, '$1' + '.' + '$2');
            }
            var val = 'Rp' + val;
            return val;
        };
    });

