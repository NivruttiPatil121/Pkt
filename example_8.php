<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
       
   </head>
   
   <body>
       <div ng-app="">
           <table border="0">
               <tr>
                    <td><input type="checkbox" ng-model="enableDisableButton">Disable Button</td>                 <td><button ng-disabled="enableDisableButton">Click Me</button></td>
               </tr>
               <tr>
                <td><input type="checkbox" ng-model="showHide1">Show Hide</td>
                    <td><button  ng-show="showHide1">Click Me</button></td>
               </tr>
                <tr>
                <td><input type="checkbox" ng-model="showHide2">Show Hide</td>
                    <td><button ng-hide="showHide2">Click Me</button></td>
               </tr>
               <tr>
                   <td>{{"Click Counter:"+clickCounter}}</td> 
                   <td><button ng-click="clickCounter=clickCounter+1">Count</button></td>
               </tr>
           </table>
       </div>
    
   
   </body>
</html>
