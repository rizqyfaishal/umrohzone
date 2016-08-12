var app = angular.module('app',['ui.router','ngAnimate','datatables'])
    .constant('PAKET_KATEGORI_URL','api/paket-kategori/')
    .constant('PAKET_URL','api/paket/')
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
    .config(function ($stateProvider,$urlRouterProvider) {
        $stateProvider
            .state('paket-list',{
                url: '',
                templateUrl: 'templates/tab-choice.html',
                controller: 'TabsController'
            })
            .state('paket-list.data-table',{
                url: '/:id',
                templateUrl: 'templates/data-tables-paket.html',
                controller: 'DataTableController'
            })
            .state('paket-details',{
                url:'/:paketId',
                templateUrl: 'templates/paket-details.html',
                controller: 'PaketDetailsController'
            })
            .state('paket-details.penerbangan',{
                url: '/penerbangan',
                templateUrl: 'templates/penerbangan.html',
                controller: 'PaketPenerbanganDetailsController'
            })
            .state('paket-details.agenda',{
                url: '/agenda',
                templateUrl: 'templates/persyaratan.html',
                controller: 'PaketAgendaDetailsController'
            })
            .state('paket-details.fasilitas',{
                url: '/fasilitas',
                templateUrl: 'templates/persyaratan.html',
                controller: 'PaketAgendaDetailsController'
            })
            .state('paket-details.home',{
                url: '/persyaratan',
                templateUrl: 'templates/persyaratan.html',
            });
        $urlRouterProvider.otherwise('/');
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
    .controller('ProgressController',function ($scope) {

    })
    .controller('PaketPenerbanganDetailsController',function ($scope,Collection,$stateParams,PAKET_URL) {
        $scope.id = $stateParams.paketId;
        console.log(Collection);
        Collection.setUrl(PAKET_URL + $scope.id + '/penerbangan');
        Collection.getData().then(function (data) {
            if(data.status){
                $scope.data = data.data;
            } else {
                alert('Something Error');
            }
        })
    })
    .controller('PaketDetailsController',function ($scope,$stateParams,$http,$q,PAKET_URL,$location,$state) {
        $scope.id = $stateParams.paketId;
        var defered = $q.defer();
        $http.get(PAKET_URL + $scope.id).then(function (response) {
            defered.resolve(response.data);
        });

        defered.promise.then(function (data) {
           $scope.data = data.data;
        });

        $scope.changeTabs = function (url) {
            $location.path('/' + $scope.id + '/' + url);
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