<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
   </head>
   
   <body ng-app="MyApp">
       <div ng-controller="HelloController">
         <label>Name:</label>
         <h1>Welecome to {{helloTo.title}} to the world of Tutorials</h1>
         <hr />
      </div>
       <script>
           angular.module("MyApp",[])
                   .controller("HelloController",function($scope){
                       $scope.helloTo={};
                        $scope.helloTo.title="Nivrutti Patil"
                   })
       </script>
   </body>
</html>
