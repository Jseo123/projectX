const id = document.getElementById("body").dataset.id;
window.addEventListener("DOMContentLoaded", async () => {
    let employees = await getEmployees();
    console.log(employees)
  });
  
  async function getEmployees() {
    const response = await fetch("cliente/getRestaurantInfo");
    const data = await response.json();
    console.log(data)
    return data;
  }