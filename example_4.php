<!doctype html>
<html>
   
   <head>
      <script src = "js/angular.min.js"></script>
   </head>
   
   <body >
       <div ng-app="" ng-init="quantity=1;cost=30;student={firstname:'Mahesh',lastname:'Parashar',rollno:101};marks = [80,90,75,73,60]">
           <p>Hello:{{student.firstname+" "+student.lastname}}</p>
           <p>Expense on Book:{{quantity*cost}} Rs</p>
           <p>Roll No{{student.rollno}}</p>
           <p>Marks on Math:{{marks[3]}}</p>
       </div>
   </body>
</html>
