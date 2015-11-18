<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
   </head>
   
   <body >
       <div ng-app="" ng-init="countries = [{locale:'en-US',name:'United States'}, {locale:'en-GB',name:'United Kingdom'}, {locale:'en-FR',name:'France'}]">
           <p>Enter Your Name:<input type="text" ng-model="name"></p>
           <p><span ng-bind="name"></span></p>
           <p>List of Countries with Locale</p>
           <ol>
               <li ng-repeat="country in countries">
                   {{'Country: '+country.name+',Locale:'+country.locale}}
               </li>
           </ol>
       </div>
   </body>
</html>
