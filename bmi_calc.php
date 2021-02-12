<?php
include("includes/includedFiles.php");
?>
<script src="2-bmi.js"></script>

<br>




<div class="Bmi_calc" >
    <h1>What is Body Mass Index?</h1>
    <br>
    Body mass index (BMI) is a value derived from the mass (weight) and height of a person.
     The BMI is defined as the body mass divided by the square of the body height, 
     and is universally expressed in units of kg/m2, resulting from mass in kilograms and height in metres.
</div>






<div class="Bmi_calc" >
    <h1 class="pageHeadingBig"> BMI CALCULATOR </h1>
    <form onsubmit="return calcBMI();">
      System:
      <label>
        <input type="radio" id="bmi-metric" name="bmi-measure" onchange="measureBMI()" checked/> Metric
      </label>

      <label>
        <input type="radio" id="bmi-imperial" name="bmi-measure" onchange="measureBMI()"/> Imperial
      </label>
      <br><br>

      Weight:
      <input id="bmi-weight" type="number" min="1" max="635" required/> 
      <span id="bmi-weight-unit">KG</span>
      <br><br>

      Height:
      <input id="bmi-height" type="number" min="54" max="272" required/>
      <span id="bmi-height-unit">CM</span>
      <br><br>

      <input type="submit" value="Calculate BMI"/>
      <div id="bmi-results"></div>

      <br>
      <br>
    </form>
</div>

<br>
<br>

<div class="Bmi_calc" >
    <table>
        <tr>
            <th>BMI </th>
            <th>Nutritional Status</th>
        </tr>

        <tr>
            <th> Below 18.5 </th>
            <th> Underweight </th>
        </tr>

        <tr>
            <th> 18.5 - 24.9 </th>
            <th> Normal Weight </th>
        </tr>

        <tr>
            <th> 25.0 - 29.9 </th>
            <th> Pre - Obesity </th>
        </tr>

        <tr>
            <th> 30.0 - 34.9 </th>
            <th> Obesity Class I </th>
        </tr>

        <tr>
            <th> 35.0 - 39.9 </th>
            <th> Obesity Class II </th>
        </tr>

        <tr>
            <th> Above 40 </th>
            <th> Obesity Class III </th>
        </tr>
    </table>

    
</div>





