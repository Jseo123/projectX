const id = document.getElementById("body").dataset.id;
window.addEventListener("DOMContentLoaded", async () => {
    let employees = await getEmployees();
    printUsers(employees);
});

async function getEmployees() {
    const response = await fetch("cliente/getRestaurantInfo");
    const data = await response.json();
    return data;
}

async function printUsers(employees) {
    const listHead = document.getElementById("listHead");
    console.log(employees);
    for (const key in employees) {
        if (key !== "password") {
            let p = document.createElement("p");
            p.innerText = `${key}: ${employees[key]}`;
            listHead.appendChild(p);
        }
    }
}
