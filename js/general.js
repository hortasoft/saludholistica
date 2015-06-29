var SHapp = angular.module('SHapp', []);

$('#addPac').on('hide.bs.modal', function () {
   $('#addPac').removeData();
})