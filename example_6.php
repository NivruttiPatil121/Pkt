<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
   </head>
   
   <body >
       <div ng-app="mainApp" ng-controller="StudentController">
           <table border="0">
               <tr>
                   <td>Enter First Name</td>
                   <td><input type="text" ng-model="student.firstName"></td>
               </tr>
               <tr>
                   <td>Enter Last Name</td>
                   <td><input type="text" ng-model="student.lastname"</td> 
               </tr>
               <tr>
                   <td>Enter Fees</td>
                   <td><input type="text" ng-model="student.fees"</td> 
               <tr>
          <tr>
                   <td>Enter Subject Name</td>
                   <td><input type="text" ng-model="student.subjectName"</td> 
               <tr>
               
           </table>
           <br>
           <table border="0">
               <tr>
                   <td> Name in upper Case: </td>
                   <td>{{student.fullName() | uppercase }}</td>
               </tr> 
               <tr>
                   <td>Student Full Name Lower Case</td>
                   <td>{{student.fullName() |lowercase}}</td>
               </tr> 
               <tr>
                   <td>Student Fees</td>
                   <td>{{student.currency+""+student.fees}}</td>
               </tr> 
               <tr>
                   <td>Subject</td>
                  <td>
                  <ul>
                     <li ng-repeat = "subject in student.subjects | filter: subjectName |orderBy:'marks'">
                        {{ subject.name + ', marks:' + subject.marks }}
                     </li>
                  </ul>
               </td>
               </tr> 
           </table>
       </div>
       <script>
            var mainApp=angular.module("mainApp",[]);
            mainApp.controller('StudentController',function($scope){
                $scope.student={
                    firstName :"Nivrutti",
                    lastName:"Patil",
                    fees:500,
                    currency:'$',
                    subjects:[
                  {name:'Physics',marks:70},
                  {name:'Chemistry',marks:80},
                  {name:'Math',marks:65}
               ],
               
                    fullName:function(){
                        var studentObject;
                        studentObject=$scope.student;
                        return studentObject.firstName +" "+studentObject.lastName;
                    }
                }
            })
       </script>
   </body>
</html>
