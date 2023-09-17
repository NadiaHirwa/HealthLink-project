<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <link rel="stylesheet" href="../styles/dashboard.css">
        <title>#doctor panel</title>
        
    </head>
    <body>
        <div class="side-menu">
            <div class="brand-name">
                <h1>HEALTHLINK</h1>
            </div>
            <ul>  
                <li><span><a href="#AppScheduler">Appointment Scheduler</a></span></li>
                <li><span><a href="#commun">Appointment Scheduling</a></span></li>
                <li><span><a href="#medical">Medical History</a></span></li>
                <li><span><a href="#pList">Update history</a></span></li>
                
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
                <h1>WELCOME Doctor</h1>
                <section id="AppScheduler">
                    <div class="content-2">
                        <div class="new-students">
                            <div class="title">
                                <h2>Appointment scheduler</h2>
                                <a href="#" class="btn">View All</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>patientId</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                </tr>
                                <?php
                                    require "connect.php"; 
                                    $result = mysqli_query ($connect, "SELECT *FROM appointment");
                                    
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        echo "<tr> <td>".$row['Date']."<td>".$row['patientId']."<td>".$row['Reason']." <td>".$row['Status']."</tr>";
                                    }
                                    
                                ?>
                            </table>
                        </div>
                    </div>
                </section>
                <section id="commun">     
                    <div class="content-2">
                        <div class="new-students">
                            <div class="title">
                                <h2>Appointment Scheduling</h2>
                                
                            </div>
                            <style>
                                
                                form{
                                    height: 60vh;
                                    overflow-y: scroll;
                                    padding: 40px 40px;
                                }
                                
                                .input-group {
                                    margin-bottom: 10px;
                                }
                                
                                label {
                                    display: block;
                                    margin-bottom: 3px;
                                    color: #19191a;
                                }
                                .search button img{
                                    width: 20px;
                                    height: 20px;
                                }
                                input[type="text"],
                                input[type="number"],
                                input[type="date"] {
                                    height: 40px;
                                    width: 60%;
                                    padding: 5px;
                                    border: 1px solid #ccc;
                                    border-radius: 3px;
                                }
                                
                                
                                .btn {
                                    background-color: #059ff8;
                                    color: #fff;
                                    padding: 10px 15px;
                                    border: none;
                                    border-radius: 3px;
                                    cursor: pointer;
                                }
                                
                                .btn:hover {
                                    background-color: #a2dafa;
                                }
                            </style>
                            <form id="Appointments"  method="post" class="Appointments">
                                <h5>Patient Details</h5>
                                <div class="input-group">
                                    <label for="username">PatientID:</label>
                                    <input type="number" id="patientId" name="patientId" required>
                                </div>
                                <div class="input-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" id="phone" name="phone" required>
                                </div>
                                <div class="input-group">
                                    <label for="AppDate">Appointment Date</label>
                                    <input type="date" id="datetime" name="datetime" required>
                                </div>
                                <div class="input-group">
                                    <label for="type">Appointment Type</label>
                                    <input type="text" id="AppType" name="AppType" required>
                                </div>
                                <div class="input-group">
                                    <label for="type">Reason</label>
                                    <input type="text" id="AppType" name="AppType" required>
                                </div>
                                <div class="input-group">
                                    <label for="type">Status</label>
                                    <input type="text" id="AppType" name="AppType" required>
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="btn" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section> 
                <section id="medical">
                    <div class="content-1">
                        <div id="medical" class="Medicalhistory">
                            <div class="title">
                                <h2>Medical History</h2>
                                <a href="#" class="btn">View All</a>
                            </div>
                            <label for="gender">Enter patient id to get history</label>
                            <div class="search">
                                <input type="search" placeholder="Search...">
                                <button type="submit"><img src="./imgs/search2.png"></button>
                            </div>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>Record Id</th>
                                    <th>Doctor id</th>
                                    <th>Nurse Id</th>
                                    <th>Diagnosis</th>
                                    <th>Medications</th>
                                    <th>Notes and Annotations</th>
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
                <section id="pList">
                    <div class="content-2">
                        <div class="new-students">
                            <div class="title">
                                <h2>Patient History Update</h2>
                                
                            </div>
                            <form id="update"  method="post" class="update">
                                <h5>Patient Details</h5>
                                <div class="input-group">
                                    <label for="username">PatientId:</label>
                                    <input type="number" id="patientId" name="patientId" required>
                                </div>
                                <div class="input-group">
                                    <label for="Date">Date</label>
                                    <input type="date" id="date" name="date" required>
                                </div>
                                <div class="input-group">
                                    <label for="Diagnose"> Diagnose</label>
                                    <input type="text" id="Diagnose" name="Diagnose" required>
                                </div>
                                <div class="input-group">
                                    <label for="medications">medications</label>
                                    <input type="text" id="medications" name="medications" required>
                                </div>
                                <div class="input-group">
                                    <label for="notes">notes and annotations</label>
                                    <input type="text" id="notes" name="notes" required>
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="btn" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </section>
                
                 
            </div>
        </div>
    </body> 
</html> 