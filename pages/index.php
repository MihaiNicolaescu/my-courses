<?php
    include("../Database/connect.php");
    include("../Models/course.php");
    session_start();
    if($_SESSION['isConnected'] != true) header("location: ../pages/login.html");

    $courses
  




?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyCourses</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../Styles/index.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light">
                    <p style="color:white;">Hello <?php echo $_SESSION['fName'] ?>, let's see what courses do you have today</p>
                    <form method="POST" action="../Auth/logout.php">
                        <button style="float: right;" class="btn btn-outline-info my-3 my-sm-0" type="submit">Logout</button>
                    </form>                
            </nav>
            <div class="row panel container">
                <div class="column courses side">
                    <h2>Today courses</h2>

                    <table class="table table-striped table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="column add-courses side">
                    <h2>Add courses</h2>
                    <form method="POST" action="../Controllers/addCourse.php">
                        <input id="cName" name="cName" type="text" placeholder="Course name">
                        <input id="cProfessor" name="cProfessor" type="text" placeholder="Professor name">
                        <select id="cType" name="cType" class="custom-select" id="inputGroupSelect01">
                            <option value="Laborator" selected>Laborator</option>
                            <option value="Curs">Curs</option>
                            <option value="Seminar">Seminar</option>
                        </select>
                        <select id="cDay" name="cDay" class="custom-select" id="inputGroupSelect01">
                            <option value="Luni" selected>Luni</option>
                            <option value="Marti">Marti</option>
                            <option value="Miercuri">Miercuri</option>
                            <option value="Joi">Joi</option>
                            <option value="Vineri">Vineri</option>
                            <option value="Sambata">Sambata</option>
                            <option value="Duminica">Duminica</option>
                        </select>
                        <input id="cStart_hour" name="cStart_hour" style="width: 150px !important;" type="time" placeholder="Begin time">
                        <input id="cDuration" name="cDuration" style="width: 100px !important;" type="number" placeholder="Duration">
                        <button style="width: 250px" class="btn btn-info">Add course</button>
                    </form>
                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
</html>