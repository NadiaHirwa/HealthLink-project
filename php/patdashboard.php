<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <link rel="stylesheet" href="../styles/dashboard.css">
        <title>#patients panel</title>
    </head>
    <body>
        <div class="side-menu">
            <div class="brand-name">
                <h1>HEALTHLINK</h1>
            </div>
            <ul>
                <li><span><a href="#medical">Medical History</a></span></li>
                <!-- <li><span><a href="#Results">Test Results</a></span></li> -->
                <li><span><a href="#UpAppointments">Upcoming Appointment</a></span></li>
                
                <!-- <li><span><a href="#message">Messaging system</a></span></li> -->
                <li><span><a href="index.html">Logout</a></span></li>
            </ul>
        </div>
        <div class="container">
            <div class="header">
                <div class="nav">
                    <div class="search">
                        <input type="search" placeholder="Search...">
                        <button type="submit"><img src="./imgs/search2.png"></button>
                    </div>
                    <div class="user">
                        <a href="#" class="btn">Add new</a>
                        <img src="./imgs/notification.png" alt="">
                        <div class="img-case">
                            <img src="./imgs/profile1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content">
                <h1>WELCOME </h1>
                <section id="medical">
                    <div class="content-1">
                        <div id="medical" class="Medicalhistory">
                            <div class="title">
                                <h2>Medical History</h2>
                                <a href="#" class="btn">View All</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>Record Id</th>
                                    
                                    <th>Doctor id</th>
                                    <th>Nurse Id</th>
                                    <th>Diagnosis</th>
                                    <th>Medications</th>
                                </tr>
                                <?php
                                    require "connect.php"; 
                                    $result = mysqli_query ($connect, "SELECT * FROM medical_record");
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        echo "<tr> <td>".$row['Date']."<td>".$row['RecordId']." <td>".$row['DoctorId']."<td>".$row['NurseId']."<td>".$row['Diagnosis']."<td>".$row['Medications']."<td>".$row['Notes']."</tr>";
                                    }
                                    
                                ?>
                            </table>
                        </div>
                    </div>
                </section>
                <section id="UpAppointments">     
                    <div class="content-2">
                        <div class="new-students">
                            <div class="title">
                                <h2>Upcoming Appointment</h2>
                                <a href="#" class="btn">View All</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>Doctor Id</th>
                                    <th>Hospital name</th>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </section>
                <!-- <section id="Results">
                    <div class="content-2">
                        <div class="new-students">
                            <div class="title">
                                <h2>Test Results</h2>
                                <a href="#" class="btn">View All</a>
                            </div>
                            <table>
                                <tr>
                                    <th>imaging reports</th>
                                    <th>lab result</th>
                                    <th>explanations</th>
                                </tr>
                                <?php
                                $result = mysqli_query( $con, "SELECT * FROM medical_record");
                                while($row = mysqli_query)
                                ?>
                            </table>
                        </div>
                    </div>
                </section> -->
                
            </div>
        </div>
    </body> 
</html> 