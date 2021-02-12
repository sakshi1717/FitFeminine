

function findDetails()
{
    let cycleDays= document.getElementById("cycle-days"),
        lastPeriodStartDay = document.getElementById("lastPeriodStartDay"),
        lastPeriodStartMonth = document.getElementById("lastPeriodStartMonth"),
        lastPeriodStartYear = document.getElementById("lastPeriodStartYear"),
        periodDays = document.getElementById("periodDays"),
        age = document.getElementById("age");
}

function calcPeriods()
{
    var  cycleDays = parseInt(document.getElementById("cycle-days").value );
    var lastPeriodStartDay = parseInt(document.getElementById("lastPeriodStartDate").value);
    var lastPeriodStartMonth =  parseInt(document.getElementById("lastPeriodStartMonth").value );

    var   lastPeriodStartYear =  parseInt(document.getElementById("lastPeriodStartYear").value );
    var   periodDays = parseInt(document.getElementById("periodDays").value );
    
    var   age =  parseInt(document.getElementById("age").value );

    var temp= lastPeriodStartMonth;
    var months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
      ];
    var days= [31 , 28 , 31 , 30 , 31, 30, 31 , 31, 30 , 31 , 30 ,31];

    lastPeriodStartDay+=parseInt(periodDays/2);
    var comp= days[lastPeriodStartMonth-1];

    if( lastPeriodStartDay>comp)
    {
        lastPeriodStartDay=lastPeriodStartDay-comp;
        lastPeriodStartMonth+=1;
    }

    var nextMonthInd= (lastPeriodStartMonth+1)%12;
    var  nextDate= 0;

    if( (days[lastPeriodStartMonth-1]-lastPeriodStartDay )>= cycleDays)
    {
        nextDate= cycleDays+ lastPeriodStartDay ;
        nextMonthInd= lastPeriodStartMonth;
    }       
    else
            nextDate = cycleDays-( (days[lastPeriodStartMonth-1]-lastPeriodStartDay )  );

    var nextMonth= months[ nextMonthInd-1];
    var nextYear=lastPeriodStartYear;
    if(temp==12 && nextMonthInd==1 )
        nextYear+=1;

    var startDate = lastPeriodStartDay+12;
    var startMonth =months[ lastPeriodStartMonth-1];
    var endDate = lastPeriodStartDay +16;
    var endMonth =months[ lastPeriodStartMonth-1];
    var endYear= lastPeriodStartYear;
    var startYear = lastPeriodStartYear;
    if(startDate> days[lastPeriodStartMonth-1])
    {
        startDate=startDate-days[lastPeriodStartMonth-1];
        startMonth = months[(lastPeriodStartMonth)%12];
    }
    if(endDate> days[lastPeriodStartMonth-1])
    {
        endDate=endDate-days[lastPeriodStartMonth-1];
        endMonth = months[(lastPeriodStartMonth)%12];
    }
    document.getElementById("results").innerHTML = nextDate+"-"+ nextMonth+"-"+ nextYear;
    document.getElementById("results2").innerHTML = "from "+ startDate+"-"+ startMonth+"-"+ startYear+" to "+endDate+"-"+ endMonth+"-"+ endYear;
    return(false);
    
    

}


