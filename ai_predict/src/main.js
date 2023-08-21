const date = document.querySelector(".date");
const time = document.querySelector(".time");

function setDate() {
  const now = new Date();
  const dayNames = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];
  const day = dayNames[now.getDay()];

  let second = now.getSeconds();
  let minute = now.getMinutes();
  let hour = now.getHours();
  let month = now.getMonth() + 1;
  let today = now.getDate();

  hour = hour < 10 ? "0" + hour : hour;
  today = today < 10 ? "0" + today : today;
  month = month < 10 ? "0" + month : month;
  minute = minute < 10 ? "0" + minute : minute;
  second = second < 10 ? "0" + second : second;

  date.innerText = now.getFullYear() + "-" + month + "-" + today + " " + day;
  time.innerText = hour + ":" + minute + ":" + second;
}
setInterval(setDate, 1000);
setDate();