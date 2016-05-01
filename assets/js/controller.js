var app = angular.module("app",[]);
app.controller("show-projects",function($scope){

  // Boxs
  $scope.boxes = [
    { img:window.location+"assets/images/no-img.png",comment:"Projeto 1" },
    { img:window.location+"assets/images/no-img.png",comment:"Projeto 2" },
    { img:window.location+"assets/images/no-img.png",comment:"Projeto 3" },
    { img:window.location+"assets/images/no-img.png",comment:"Projeto 4" },
    { img:window.location+"assets/images/no-img.png",comment:"Projeto 5" },
    { img:window.location+"assets/images/no-img.png",comment:"Projeto 6" }
  ];
  // endBoxs
});
