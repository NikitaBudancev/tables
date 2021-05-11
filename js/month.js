const date = document.querySelector('#date'),
  arrival = document.querySelector('#arrival'),
  spendign = document.querySelector('#spending'),
  comment = document.querySelector('#comment');


const arrAddMonth = [date, arrival, spendign, comment]

arrAddMonth.forEach((item, index) => {
  item.addEventListener('change', (e) => {
    // const attribute = e.getAttribute('comment');
    console.log(e.target.attributes);
  })
})

// async function getMonth(month) {
//   console.log(JSON.stringify({ month }));
//   let response = await fetch("/handler/handler.php", {
//     method: "POST",
//     body: JSON.stringify({ month }),
//     headers: {
//       "Content-Type": "application/json",
//     },
//   });
// }