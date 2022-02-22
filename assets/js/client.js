const id = document.getElementById("body").dataset.id;
const tableList = document.getElementById("tableList");
const main = document.getElementById("container");

window.addEventListener("DOMContentLoaded", async () => {
  let employees = await getEmployees();
});

async function getEmployees() {
  const response = await fetch("cliente/getRestaurantInfo");
  const data = await response.json();
  return data;
}

tableList.addEventListener("click", (e) => {
  while (main.firstChild) {
    main.removeChild(main.lastChild);
  }

  let ul = document.createElement("ul");
  main.appendChild(ul);

  let x = ["Mesa 1", "Mesa 2", "Mesa 3"];
  let z = x.forEach((element) => {
    let a = document.createElement("li");
    a.innerText = element;
    ul.appendChild(a);
  });
});
