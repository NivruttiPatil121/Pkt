<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
      <script src = "js/mainApp.js"></script>
      <script src = "js/studentController.js"></script>
         <style>
         table, th , td {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
         }
         
         table tr:nth-child(odd) {
            background-color: #f2f2f2;
         }
         
         table tr:nth-child(even) {
            background-color: #ffffff;
         }
      </style>
   </head>
   
   <body >
       <div ng-app="myApp" ng-controller="StudentController">
           <table border="0">
               <tr>
                   <td>First Name</td>
                   <td><input type="text" ng-model="student.firstName"</td>
               </tr>
               <tr>
                   <td>Last Name</td>
                   <td><input type="text" ng-model="student.lastName"</td>
               </tr>
               <tr>
                   <td>Name:</td>
                   <td>{{student.fullName()}}</td>
               </tr>
               <tr>
                   <td>Subject</td>
                   <td>
                       <table border="0">
                           <tr>
                               <th>Subject</th>
                               <th>Marks</th>
                           </tr>
                           <tr ng-repeat="subject in student.subjects">
                               <td>{{subject.name}}</td>
                               <td>{{subject.marks}}</td>
                           </tr>
                       </table>
                   </td>
               </tr>
               
           </table>
       </div>
     </body>
</html>
