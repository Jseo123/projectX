const id = document.getElementById("body").dataset.id;
window.addEventListener("DOMContentLoaded", async () => {
  let employees = await getEmployees();
  printMain(employees);
});

async function getEmployees() {
  const response = await fetch("cliente/getRestaurantInfo");
  const data = await response.json();
  return data;
}

async function printMain(employees) {
  const listHead = document.getElementById("listHead");
  listHead.classList.add("flex");
}
