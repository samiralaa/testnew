/* menu toggle */
let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
toggle.addEventListener('click', () => {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
});

/* add hovered class in selected list item */
let list = document.querySelectorAll('.navigation li');
let listArray = Array.from(list);
let navLink = document.querySelector('.nav-link');

let tabsContent = document.querySelectorAll('.tabs-content > .tab');
let tabsContentArray = Array.from(tabsContent)
// if(navLink) {
//     function activeLink(e) {
//         e.preventDefault();
//         list.forEach((e) => {
//             e.classList.remove('active');
//         });
//         this.classList.add('active');
//     }
// }
// list.forEach((e) => {
//     e.addEventListener('click', activeLink);
// });





// view tab contents on click nav-links
if (navLink) {
    listArray.forEach((ele) => {
        ele.addEventListener('click', e => {
            e.preventDefault();
            listArray.forEach(element => {
                element.classList.remove('active');
            });
            e.currentTarget.classList.add('active');
            tabsContentArray.forEach(content => {
                content.style.display = 'none';
            });
            console.log(e.currentTarget.dataset.content);
            document.querySelector(e.currentTarget.dataset.content).style.display = 'block';
        });
    });
}



// select Calendar section
const isLeapYear = (year) => {
    return (
        (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) ||
        (year % 100 === 0 && year % 400 === 0)
    );
};
const getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28;
};
let calendar = document.querySelector('.cale');
const month_names = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
];
const month_picker = document.querySelector('#month-picker');
const dayTextFormate = document.querySelector('.day-text-formate');
const timeFormate = document.querySelector('.time-formate');
const dateFormate = document.querySelector('.date-formate');

month_picker.onclick = () => {
    month_list.classList.remove('hideonce');
    month_list.classList.remove('hide');
    month_list.classList.add('show');
    dayTextFormate.classList.remove('showtime');
    dayTextFormate.classList.add('hidetime');
    timeFormate.classList.remove('showtime');
    timeFormate.classList.add('hideTime');
    dateFormate.classList.remove('showtime');
    dateFormate.classList.add('hideTime');
};

const generateCalendar = (month, year) => {
    let calendar_days = document.querySelector('.cale-days');
    calendar_days.innerHTML = '';
    let calendar_header_year = document.querySelector('#year');
    let day_of_month = [
        31,
        getFebDays(year),
        31,
        30,
        31,
        30,
        31,
        31,
        30,
        31,
        30,
        31
    ];
    let currentDate = new Date();
    month_picker.innerHTML = month_names[month];
    calendar_header_year.innerHTML = year;
    let first_day = new Date(year, month);

    for (let i = 0; i <= day_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div');
        if (i >= first_day.getDay()) {
            day.innerHTML = i - first_day.getDay() + 1;
            if (i - first_day.getDay() + 1 === currentDate.getDate() && year === currentDate.getFullYear() && month === currentDate.getMonth()) {
                day.classList.add('current-date');
            }
        }
        calendar_days.appendChild(day);
    }
};

let month_list = calendar.querySelector('.month-list');
month_names.forEach((e, index) => {
    let month = document.createElement('div');
    month.innerHTML = `<div>${e}</div>`;
    month_list.append(month);
    month.onclick = () => {
        currentMonth.value = index;
        generateCalendar(currentMonth.value, currentYear.value);
        month_list.classList.replace('show', 'hide');
        dayTextFormate.classList.remove('hideTime');
        dayTextFormate.classList.add('showtime');
        timeFormate.classList.remove('hideTime');
        timeFormate.classList.add('showtime');
        dateFormate.classList.remove('hideTime');
        dateFormate.classList.add('showtime');
    };
});

(function () {
    month_list.classList.add('hideonce');
})();
document.querySelector('#pre-year').onclick = () => {
    --currentYear.value;
    generateCalendar(currentMonth.value, currentYear.value);
};
document.querySelector('#next-year').onclick = () => {
    ++currentYear.value;
    generateCalendar(currentMonth.value, currentYear.value);
};

let currentDate = new Date();
let currentMonth = { value: currentDate.getMonth() };
let currentYear = { value: currentDate.getFullYear() };
generateCalendar(currentMonth.value, currentYear.value);

const todayShowTime = document.querySelector('.time-formate');
const todayShowDate = document.querySelector('.date-formate');

const currShowDate = new Date();
const showCurrentDateOption = {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    weekday: 'long',
};
const currentDateFormate = new Intl.DateTimeFormat(
    'en-US',
    showCurrentDateOption
).format(currShowDate);
todayShowDate.textContent = currentDateFormate;
setInterval(() => {
    const timer = new Date();
    const option = {
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric',
    };
    const formateTimer = new Intl.DateTimeFormat('en-US', option).format(timer);
    let time = `${`${timer.getHours()}`.padStart(
        2,
        '0'
    )} : ${`${timer.getMinutes()}`.padStart(
        2,
        '0'
    )} : ${`${timer.getSeconds()}`.padStart(
        2,
        '0'
    )}`;
    todayShowTime.textContent = formateTimer;
}, 1000);



/* select hide in placeholder */
let searchInput = document.getElementById("searchInput");
searchInput.onfocus = function () {
    if (this.placeholder == "How can we help you?") {
        this.placeholder = "";
    }
}
searchInput.onblur = function () {
    if (this.placeholder == "") {
        this.placeholder = "How can we help you?";
    }
}