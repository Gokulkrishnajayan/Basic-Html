
const year = document.getElementById("year"); 
const month = document.getElementById("month");
const btn = document.getElementById("btn");
const currentDateLabel = document.getElementById("current-date");
const calenderData = document.getElementById("calender-data"); 

const months = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December",
];

weeks = `
<li class="day">Sun</li>
<li class="day">Mon</li>
<li class="day">Tue</li>
<li class="day">Wed</li>
<li class="day">Thu</li>
<li class="day">Fri</li>
<li class="day">Sat</li>`; 

const renderCalender = () => {
    if (year.value && month.value) {
        let li = ''; 
        calenderData.innerHTML = ''; 
        currentDateLabel.innerHTML = '';            
        //console.log(month.value-1);
        let lastDayOfMonth = new Date(year.value, month.value, 0).getDate();//new Date(year,month,day);
        let firstDayOfMonth = new Date(year.value, month.value - 1, 1).getDay();     //1=gets day 0=sunday 1=monday
        let lastDayOfPrevMonth = new Date(year.value, month.value - 1, 0).getDate(); //0=last day of month
        console.log(firstDayOfMonth, lastDayOfMonth, lastDayOfPrevMonth); 
        currentDateLabel.textContent = `${months[month.value - 1]} , ${year.value}`; 
        for (let i = firstDayOfMonth; i > 0; i--) {
            li += `<li class="last-month">${lastDayOfPrevMonth - i +1}</li>`; 
            console.log(lastDayOfPrevMonth - i+1);
        }

        for (let i = 1; i <= lastDayOfMonth; i++) {
            li += `<li>${i}</li>`;
            //console.log(lastDayOfMonth);

        }
        calenderData.innerHTML += weeks + li;
    }
};

btn.addEventListener("click", renderCalender);
