<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
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
       <script>
            var mainApp=angular.module("myApp",[]);
            mainApp.controller("StudentController",function($scope){
                $scope.student={
                    firstName:"Nivrutti",
                    lastName:"Patil",
                    subjects:[
                        {name:'Physics',marks:50},
                        {name:'Chemistry',marks:60},
                        {name:'Biology',marks:70},
                        {name:'Mathematics',marks:80},
                        
                    ],
                    fullName:function(){
                        var studentObject;
                        studentObject=$scope.student;
                        return studentObject.firstName+" "+studentObject.lastName;
                    }
                }
            })
       </script>
   
   </body>
</html>
