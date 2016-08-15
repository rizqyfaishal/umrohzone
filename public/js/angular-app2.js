var app = angular.module('app',['ui.router'])
    .constant('USER_API_URL','/api/user/')
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
    .config(function ($stateProvider,$urlRouterProvider) {
        $stateProvider
            .state('data-jamaah',{
                url: '/',
                templateUrl: '/templates/data-jamaah.html',
                controller: 'HomeController'
            });
        $urlRouterProvider.otherwise('/');
    })
    .service('User',function ($http,$q) {
        this.url = null;
        this.data = null;
        this.setData = function (data) {
            this.data = data;
        };
        this.setUrl = function (url) {
            this.url = url;
        };
        this.getData = function () {
            var defer = $q.defer();
            $http.get(this.url).then(function (data) {
                defer.resolve(data.data);
            });
            return defer.promise;
        };
        return this;
    })
    .service('Paket',function ($q,$http) {
        this.url = null;
        this.data = null;
        this.setData = function (data) {
              this.data = data;
        };
        this.setUrl = function (url) {
            this.url = url;
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
    .controller('HomeController',function ($scope,User,Paket,USER_API_URL,$http,Month,$location) {
        $scope.daftarJamaah = [];
        $scope.tambahJamaah = function () {
            if($scope.count >= 4){
                alert('Maksimal 4 jamaah');
            } else {
                $scope.daftarJamaah.push({
                    num: ++$scope.count,
                    paspor_expired: false,
                    nama_validate: false,
                    paspor_nama_validate: false,
                    paspor_date_expired: null,
                    mahrom: false,
                    fname: null,
                    mname: null,
                    lname: null,
                    address: null,
                    provinsi_id: null,
                    regency_id: null,
                    upgrade_kamar: null,
                    asuransi_tambahan: null
                });
            }

        };
        $('#daftarJamaahTabs a:last').tab('show');
        $scope.count = 1;
        var initJamaah = {
            num: $scope.count,
            paspor_expired: false,
            nama_validate: false,
            paspor_nama_validate: false,
            paspor_date_expired: null,
            mahrom: false,
            fname: null,
            mname: null,
            lname: null,
            address: null,
            provinsi_id: null,
            regency_id: null,
            upgrade_kamar: true,
            asuransi_tambahan: true
        };
        $scope.daftarJamaah.push(initJamaah);
        User.setUrl(USER_API_URL);
        User.getData().then(function (data) {
            User.setData(data.data);
            $scope.data = data.data;
            console.log($scope.data);
            $scope.userForMitra = $scope.data.user.get_mitra == 1;
            $scope.userCheckPromo = $scope.data.user.get_promo == 1;
        });

        $scope.idPaket = $('#id').attr('content');
        Paket.setUrl('/api/user/paket/' + $scope.idPaket);
        Paket.getData().then(function (data) {
            $scope.paket = data.data;
            Paket.data = data.data;
            var waktu = new Date($scope.paket.waktu);
            var tahun = waktu.getFullYear();
            var bulan = Month[waktu.getMonth()];
            var tanggal = waktu.getDate() + 1;
            $scope.paket.waktu = tanggal + ' ' + bulan + ' ' + tahun;
        });
        $scope.toogleCheckMitra = function () {
            $http.post(USER_API_URL + 'toogleCheckMitra').then(function (res) {
                console.log(res);

            })
        };

        $scope.hapusJamaah = function (index) {
            $scope.daftarJamaah.splice(index,1);
            $scope.count--;
            $scope.daftarJamaah.forEach(function (x,w) {
                x.num = w + 1
            });
        };


        $scope.provinsiArray = null;
        $scope.regencyArray = null;

        $http.get('/api/provinsi').then(function (res) {
            $scope.provinsiArray = res.data.data;

        });

        $scope.changeDataRegency = function (id) {
            $http.get('/api/provinsi/' + id).then(function (res) {
                $scope.regencyArray = res.data.data;
            })
        };
        $scope.toogleCheckPromo = function () {
            $http.post(USER_API_URL + 'toogleCheckPromo').then(function (res) {
                console.log(res);

            })
        };
        $scope.totalHarga = 0;
    })
    .controller('ProgressController',function ($scope) {

    });