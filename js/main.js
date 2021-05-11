// <============= Таблица зарплат по месяцам ================>
const nikita = document.querySelectorAll('input[name="nikita"]'),
  anton = document.querySelectorAll('input[name="anton"]'),
  roma = document.querySelectorAll('input[name="roma"]'),
  zhenya = document.querySelectorAll('input[name="zhenya"]'),
  denis = document.querySelectorAll('input[name="denis"]');

const arrName = [anton, roma, denis, zhenya, nikita];

function inputValue(input) {
  input.forEach((arr, name) => {
    arr.forEach((elem, index) => {
      const month = index + 1;
      elem.addEventListener("change", (e) => {
        const data = {
          name,
          month,
          value: e.target.value,
        };
        fetchData(data);
      });
    });
  });
}

inputValue(arrName);

async function fetchData(data) {
  console.log(JSON.stringify({ data }));
  let response = await fetch("/handler/handler.php", {
    method: "POST",
    body: JSON.stringify({ data }),
    headers: {
      "Content-Type": "application/json",
    },
  })
  await location.reload();
}
// <============= Таблица зарплат по месяцам ================>

// <============= Активное меню ================>

const menuItems = document.querySelectorAll('.menu__link')

menuItems.forEach(item => {
  const location = window.location.href;
  const link = item.href;
  console.log(item.href)
  location == link ? item.classList.add('menu__link--active') : '';
})

// <============= Активное меню ================>