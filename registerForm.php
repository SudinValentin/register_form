<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="FormCSS.css" rel="stylesheet">
        <title>Registration form</title>
    </head>
    <body>
        <h1>Registration</h1>

        <form class="border" action="" method="post">
            <label><div id="left">Name:</div>
                <div id="right">
                    <input placeholder="enter name" type="text" name="name" value="<?= $name ?>"> 
                </div>
            </label>
            <br>
            
            <label><div id="left">Surname:</div>
                <div id="right">
                    <input placeholder="enter surname" type="text" name="surname" value="<?= $surname?>">
                </div>
            </label>
            <br>
            
            <label><div id="left">email:</div>
                <div id="right">
                    <input placeholder="enter email" type="text" name="email" value="<?= $email?>">
                </div>
            </label>
            <br>
            
            <label><div id="left">Password:</div>
                <div id="right">
                    <input placeholder="enter password" type="password" name="password" value="<?= $password?>">
                </div>
            </label>
            <br>
            
            <p><i>Birthday:</i></p>
                    <select name="day" value="<?= $day?>">
                         <?php  
                        // $daysCount= cal_days_in_month($calendar, $month, $year);
                                for ($i = 1; $i <=31; $i++) { 
                                      echo '<option value="'.$i.'">'.$i.'</option>';
                                } 
                         ?>
                         
                     </select>
            
            <select name="month">
                         <option value="1">january</option>        
                         <option value="2">february</option>
                         <option value="3">march</option>
                         <option value="4">april</option>
                         <option value="5">may</option>
                         <option value="6">june</option>
                         <option value="7">july</option>
                         <option value="8">august</option>
                         <option value="9">september</option>
                         <option value="10">october/option>
                         <option value="11">november</option>
                         <option value="12">december</option>
            </select>
            
                     <select name="year">
                        <?php 
                                for ($i = 2015; $i >= 1915; --$i) { 
                                      echo '<option value="'.$i.'">'.$i.'</option>';
                                } 
                         ?>
                         year
                     </select>
            <br>
            Additionally info about you:<br>(not necessary)<br>
            <textarea rows="3"></textarea><br>
            
            <input type="checkbox" checked>I am familiar with the terms<br>
            
              <p><i>Are you a goose?</i></p>
            <label>
                <input type="radio" checked name="question-one" value="1"> 
                Yes;
            </label>
            <br>
            <label>
                <input type="radio" name="question-one" value="0">
                No;
            </label>  
            <br>

         

            
            <input type="submit" value="REGISTRATION">
        </form>
    </body>
</html>


