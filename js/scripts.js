// création de la classe Employé
class Employee {
    constructor(lastName, firstName, gender, email, salary, month) {
        this.lastName = lastName,
            this.firstName = firstName,
            this.gender = gender,
            this.email = email,
            this.salary = salary,
            this.month = month
    }
}

// Récupère la date d'aujourd'hui
let dateAujourdhui = new Date();

// tableau des mois de l'année
var tab_mois = [" janvier", " février", " mars", " avril", " mai", " juin", " juillet", " août", " septembre", " octobre", " novembre", "  décembre"];
// Tableau de l'ensemble des employés
let employees = []

// fonction qui instancie un nouvel employé et le rajoute au tableau
function addEmployee(indexName, lastName, firstName, gender, email, salary, month) {
    employees[indexName] = new Employee(lastName, firstName, gender, email, salary, month);
}

// Ajout de tous les employés
addEmployee("sana", "Hamrouni", "Sana", "F", "sanasouissi1987@gmail.com", 115.37, 12);
addEmployee("salem", "Addali", "Salem", "M", "jamiladu93300@hotmail.fr", 1491.17, 12);
addEmployee("kamel", "Hamrouni", "Kamel", "M", "kamelh419@gmail.com", 1463.89, 12);
addEmployee("aichaH", "Hmichane", "Aicha", "F", "hmichaneaicha@gmail.com", 1049.52, 12);
addEmployee("mouctar", "Nimaga", "Mouctar", "M", "mnimaga@gmail.com", 1242.75, 12);
addEmployee("aichaA", "Abed", "Aicha", "F", "aichaabed@hotmail.fr", 591.53, 12);
addEmployee("fatma", "Alaya Ben Khalifa", "Fatma", "F", "aziz93300@live.fr", 612.46, 12);
addEmployee("hasna", "Maakhlouk", "Hasna", "F", "mhaa-2@live.fr ", 532.65, 12);
addEmployee("nadia", "Eisa", "Nadia", "F", "haifnadia00@gmail.com", 390.55, 12);
addEmployee("yasmina", "Hocine", "Yasmina", "F", "hocine.yasmina.h@gmail.com", 414.03, 12);
addEmployee("hafida", "Jalal", "Hafida", "F", "hafidajalal30@gmail.com", 230.83, 12);
addEmployee("houda", "Ben Mhenni", "Nour El Houda", "F", "benmhenninourelhouda@gmail.com", 230.83, 12);

// Mise à jour du salire et du mois

function updateSalary(indexName, salary, month) {
    employees[indexName].salary = salary;
    employees[indexName].month = month;

}

function generOneMail(indexName) {
    let textEmail = document.createElement('div');
    let email = document.createElement("p");
    let text = document.createElement('p');
    let mailObject = document.createElement('p');
    let nomEtPrenom = document.createElement('p');

    document.body.appendChild(textEmail);
    textEmail.appendChild(email);
    textEmail.appendChild(mailObject);
    textEmail.appendChild(nomEtPrenom);
    textEmail.appendChild(text);

    email.innerHTML = employees[indexName].email;
    mailObject.innerHTML = `Paie du mois de ${tab_mois[employees[indexName].month - 1]}`
    if (employees[indexName].gender === "M") {
        nomEtPrenom.innerHTML = `M. ${employees[indexName].lastName} ${employees[indexName].firstName},`
    } else {
        nomEtPrenom.innerHTML = `Mme. ${employees[indexName].lastName} ${employees[indexName].firstName},`;
    }

    text.innerHTML = `Je vous informe qu'un virement d'un montant de ${employees[indexName].salary} €  à été initié en votre faveur ce jour soit le ${dateAujourdhui.getDate() + tab_mois[dateAujourdhui.getMonth()]}.<br/><br/> Ce montant correspond à votre salaire du mois de ${tab_mois[employees[indexName].month - 1]}. <br/><br/>N'hésitez pas me contacter en cas de soucis`;
}
// Générateur de mails personalisés à l'aide d'une boucle
function generMails() {
    for (const employee in employees) {
        let textEmail = document.createElement('div');
        let email = document.createElement("p");
        let text = document.createElement('p');
        let mailObject = document.createElement('p');

        document.body.appendChild(textEmail);
        textEmail.appendChild(email);
        textEmail.appendChild(mailObject);
        textEmail.appendChild(nomEtPrenom);
        textEmail.appendChild(text);

        email.innerHTML = employees[employee].email;
        mailObject.innerHTML = `Paie du mois de ${tab_mois[employees[employee].month - 1]}`
        let nomEtPrenom = document.createElement('p');
        if (employees[employee].gender === "M") {
            nomEtPrenom.innerHTML = `M. ${employees[employee].lastName} ${employees[employee].firstName},`
        } else {
            nomEtPrenom.innerHTML = `Mme. ${employees[employee].lastName} ${employees[employee].firstName},`;
        }

        text.innerHTML = `Je vous informe qu'un virement d'un montant de ${employees[employee].salary} €  à été initié en votre faveur ce jour soit le ${dateAujourdhui.getDate() + tab_mois[dateAujourdhui.getMonth()]}<br/>. Ce montant correspond à votre salaire du mois de ${tab_mois[employees[employee].month - 1]}<br/>. N'hésitez pas me contacter en cas de soucis`;


    }
}
generOneMail('');



