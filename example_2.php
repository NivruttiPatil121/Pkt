<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
   </head>
   
   <body >
       <div ng-app="">
           <p>Enter Your Name:<input type="text" ng-model="name"></p>
           <p>hello                 <span ng-bind="name"></span></p>     
           
       </div>
   </body>
</html>
