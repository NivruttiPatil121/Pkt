<!doctype html>
<html>
   <head>
      <script src = "js/angular.min.js"></script>
      <style>
          table,td,th{
              border: solid gray;
              border-collapse: collapse;
              padding: 5px;
              
          }
          table tr:nth-child(odd){
              background-color: #f2f2f2;
          }
          table td:nth-child(even){
              background-color: #ffffff;
          }
      </style>
   </head>
   <body>
       <div ng-app="mainApp" ng-controller="StudentController">
           <div ng-include="include/main.php"></div>
           <div ng-include="include/subject.php"></div>
       </div>
   </body>
</html>
