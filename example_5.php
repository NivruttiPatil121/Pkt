<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
   </head>
   
   <body >
       <div ng-app="myApp" ng-controller="StudentController">
           Enter First Name:<input type="text" ng-model="student.firstname;">
           Enter Last Name: <input type="text" ng-model="student.lastname">
           <br>
           Your Are Entering {{student.fullName()}}
           
       </div>
       <script>
           var mainApp=angular.module("myApp",[]);
            mainApp.controller('StudentController',function($scope){
               $scope.student={
                   firstname:"Nivrutti",
                   lastname:"Patil",
                   fullName:function(){
                       var studentObject;
                        studentObject=$scope.student;
                        return studentObject.firstname+" "+studentObject.lastname;
                   }
               }
           })
       </script>
   </body>
</html>
