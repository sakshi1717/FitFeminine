<?php
include("includes/includedFiles.php");
?>

<div class="menstrual1" >
<h1> What does Period Calculator do?</h1>


<p>

It gives you the estimated starting dates for the next 12 periods.
 All you have to do is to enter the starting date of your last period and the average
  length of your period cycle. Period cycle is the length of time in days from the start 
  of one period to the start of the next one. Normal menstruation can be anywhere between 
  two and seven days with three to five days being most common. The normal range of blood loss
   is ten to eighty milliliters with thirty-five ml being the average. Human females experience m
   enstruation from puberty till the start of menopause.
</p>

</div>



<div class= "menstrual2">

<script src="menstrual_tracker1.js"></script>


<table>
  <tr>
<th class="column1">

<h1 class="pageHeadingBig"> Cycle Predictor</h1>



  <div class="centerSection">
  <form>
        
    Cycle Days:
    <input id="cycle-days" type="number" min="1" max="365" required/> 
    <span >days</span>
    <br><br>

    Last Period Start Date:
    <input id="lastPeriodStartDate" type="number" min="1" max="31" required/> 
    <br><br>

    Last Period Start Month:
    <input id="lastPeriodStartMonth" type="number" min="1" max="12" required/> 
    <br><br>

    Last Period Start Year:
    <input id="lastPeriodStartYear" type="number" min="1" max="2019" required/> 
    <br><br>

    Period Days:
    <input id="periodDays" type="number" min="1" max="28" required/> 
    <span >days</span>
    <br><br>

    Age:
    <input id="age" type="number" min="12" max="60" required/> 
    <br><br>

    

    <button type="button" onClick="JavaScript:calcPeriods()">Calculate</button>

    <p> Here are the results based on the information you provided </p>
    <p> Your expected period date is:</p>
    <b><div id="results">Your results</div></b>
    <p> Your most fertile period is :</p>
    <b><div id="results2"> Your results</div></b>
  </form>
  </div>
</th>
<th class="column2"> <img alt="" src="browse_img/mens1.jpg"> </th>
</tr>
</table>
</div>
 

