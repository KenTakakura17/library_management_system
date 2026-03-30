<?php
// Years
$years = ["1st Year", "2nd Year", "3rd Year", "4th Year"];

// UM Digos College Departments / Courses including Technology
$courses = [
    "DCJE - Criminology",
    "DTE - Technical Education",
    "Information Technology (IT)",
    "Computer Technology (ACT)",
    "Accountancy / Accounting Tech",
    "Business Administration",
    "Education (Elem/Secondary)",
    "Medical & Healthcare",
    "Professional & Technical Programs",
    "Arts & Sciences"
];

// Selected Year & Course from GET
$selectedYear = $_GET['year'] ?? '';
$selectedCourse = $_GET['course'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Library Student Records</title>
<!-- <link rel="stylesheet" href="../css/Adminarea.css"> -->
<style>
/* General UI */
body {
    background: linear-gradient(135deg, rgb(200,16,46), rgb(120,10,30), rgb(60,5,15));
    background-size: 300% 300%;
    animation: gradientBG 12s ease infinite;
    font-family: 'Poppins', 'Segoe UI', sans-serif;
    min-height: 100vh;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}
@keyframes gradientBG {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}
.container {
    background: rgba(255,255,255,0.97);
    border-radius: 22px;
    padding: 45px;
    width: 100%;
    max-width: 1000px;
    box-shadow: 0 25px 70px rgba(0,0,0,0.35);
    border: 1px solid rgba(255,255,255,0.6);
    backdrop-filter: blur(10px);
}
h1.createuser {
    text-align: center;
    margin-bottom: 35px;
    font-size: 30px;
    font-weight: 700;
    color: rgb(200,16,46);
    letter-spacing: 3px;
    text-transform: uppercase;
    position: relative;
}
h1.createuser::after {
    content: '';
    display: block;
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, rgb(200,16,46), rgb(120,10,30));
    margin: 12px auto 0;
    border-radius: 4px;
}
form {
    display: grid;
    grid-template-columns: 1fr 1fr auto;
    gap: 12px;
    align-items: end;
    margin-bottom: 20px;
}
label {
    display: block;
    margin-bottom: 5px;
    font-size: 12px;
    font-weight: 600;
    color: #555;
    text-transform: uppercase;
    letter-spacing: 1px;
}
select, input {
    width: 100%;
    padding: 10px 14px;
    border: 2px solid #e4e4e4;
    border-radius: 12px;
    font-size: 14px;
    background: #fafafa;
    outline: none;
    transition: all 0.3s ease;
}
select:focus, input:focus {
    border-color: rgb(200,16,46);
    background: white;
    box-shadow: 0 0 0 5px rgba(200,16,46,0.15);
}
button.savebutton, button.changeBtn, button.deadlineBtn {
    padding: 12px 20px;
    min-width: 110px; /* ensures equal size */
    border: none;
    border-radius: 12px;
    background: linear-gradient(90deg, rgb(200,16,46), rgb(120,10,30));
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s ease;
    display: inline-block;
    text-align: center;
}
button.savebutton:hover, button.changeBtn:hover, button.deadlineBtn:hover {
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 12px 35px rgba(200,16,46,0.45);
}
button.savebutton:active, button.changeBtn:active, button.deadlineBtn:active {
    transform: scale(0.98);
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}
table, th, td {
    border: 1px solid #ddd;
}
th, td {
    padding: 10px;
    text-align: left;
}
td:last-child {
    text-align: center;
}
#addForm {
    display: none;
    margin-bottom: 20px;
    text-align: center; /* center inputs and button */
}
#addForm input, #addForm select {
    width: 200px;
    margin: 0 5px;
}
.overdue {
    color: red;
    font-weight: 700;
}
</style>
</head>
<body>
<div class="container">
<h1 class="createuser">Library Student Records</h1>

<!-- Filter Form -->
<form method="GET">
    <div>
        <label for="year">Select Year:</label>
        <select name="year" id="year">
            <option value="">--All Years--</option>
            <?php foreach($years as $y): ?>
                <option value="<?= $y ?>" <?= ($selectedYear==$y)?'selected':'' ?>><?= $y ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="course">Select Department:</label>
        <select name="course" id="course">
            <option value="">--All Departments--</option>
            <?php foreach($courses as $c): ?>
                <option value="<?= $c ?>" <?= ($selectedCourse==$c)?'selected':'' ?>><?= $c ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="savebutton">Go</button>
</form>

<?php if($selectedYear && $selectedCourse): ?>
    <div style="text-align:center;">
        <button onclick="toggleAddForm()" class="savebutton" style="margin-bottom:15px;">Add Student</button>
    </div>

    <div id="addForm">
        <input type="text" id="newName" placeholder="Student Name" required>
        <select id="newStatus">
            <option value="N/A">N/A</option>
            <option value="Borrowed">Borrowed</option>
            <option value="Bought(Book)">Bought(Book)</option>
        </select>
        <button type="button" onclick="addStudent()" class="savebutton">Save Student</button>
    </div>

    <div id="tableContainer">
        <h2 style="margin-top:15px;"><?= $selectedYear ?> - <?= $selectedCourse ?></h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Deadline</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="studentTableBody">
                <!-- Rows loaded by JS -->
            </tbody>
        </table>
    </div>
<?php endif; ?>
</div>

<script>
// Persistent students using localStorage
let students = JSON.parse(localStorage.getItem('students')) || [];
let nextId = students.length ? Math.max(...students.map(s=>s.id))+1 : 1;
const year = "<?= $selectedYear ?>";
const course = "<?= $selectedCourse ?>";

// Load table for selected year/course
function loadTable(){
    const tbody = document.getElementById('studentTableBody');
    tbody.innerHTML = '';
    const now = new Date();
    students.filter(s=>s.year===year && s.course===course)
            .forEach((s,index)=>{
        const overdue = s.deadline && new Date(s.deadline) < now;
        const row = document.createElement('tr');
        if(overdue) row.classList.add('overdue');
        row.id = 'row-'+s.id;
        row.innerHTML = `
            <td>${index+1}</td>
            <td>${s.name}</td>
            <td>${s.year}</td>
            <td>${s.course}</td>
            <td id="status-${s.id}">${s.status}</td>
            <td id="deadline-${s.id}">${s.deadline ? s.deadline : '-'}</td>
            <td>
                <button class="changeBtn">Change Status</button>
                <button class="deadlineBtn">Set Deadline</button>
            </td>
        `;
        // Add onclick handlers
        row.querySelector('.changeBtn').onclick = ()=>setStatus(s.id);
        row.querySelector('.deadlineBtn').onclick = ()=>setDeadline(s.id);
        tbody.appendChild(row);
    });
}

function toggleAddForm(){
    const f = document.getElementById('addForm');
    f.style.display = f.style.display==='none'?'block':'none';
}

function addStudent(){
    const name = document.getElementById('newName').value.trim();
    let status = document.getElementById('newStatus').value;
    if(!name){ alert("Enter student name"); return; }

    if(status==='Borrowed'){
        const book = prompt("Enter Book Name:");
        if(book) status = `Borrowed (${book})`;
    }

    const student = {id: nextId, name, year, course, status, deadline: ''};
    students.push(student);
    localStorage.setItem('students', JSON.stringify(students));
    nextId++;

    document.getElementById('newName').value='';
    loadTable();
}

function setStatus(id){
    const s = students.find(x=>x.id===id);
    let status = prompt("Enter status:\nN/A, Borrowed, Bought(Book)", s.status);
    if(!status) return;
    status = status.trim();
    if(status==='Borrowed'){
        const book = prompt("Enter Book Name:");
        if(book) status = `Borrowed (${book})`;
    }
    s.status = status;
    localStorage.setItem('students', JSON.stringify(students));
    loadTable();
}

function setDeadline(id){
    const s = students.find(x=>x.id===id);
    const d = prompt("Set return deadline (YYYY-MM-DD):", s.deadline || '');
    if(d){
        s.deadline = d;
        localStorage.setItem('students', JSON.stringify(students));
        loadTable();
    }
}

// Initial load
if(year && course){
    loadTable();
}
</script>
</body>
</html>