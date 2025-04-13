const HomeSection = document.getElementById("HomeSection")
const NoteSection = document.getElementById("NoteSection")
const TodoSection = document.getElementById("TodoSection")
const TeamSection = document.getElementById("TeamSection")

HomeSection.style.display ="block";
NoteSection.style.display ="none"
TodoSection.style.display ="none"
TeamSection.style.display ="none"


document.getElementById('Home').addEventListener('click', function () {
    document.getElementById('HomeSection').click();
    HomeSection.style.display ="block";
    NoteSection.style.display ="none"
    TodoSection.style.display ="none"
    TeamSection.style.display ="none"
});

document.getElementById('Note').addEventListener('click', function () {
    document.getElementById('NoteSection').click();
    HomeSection.style.display ="none";
    NoteSection.style.display ="block"
    TodoSection.style.display ="none"
    TeamSection.style.display ="none"
});

document.getElementById('ToDo').addEventListener('click', function () {
    document.getElementById('TodoSection').click();
    HomeSection.style.display ="none";
    NoteSection.style.display ="none"
    TodoSection.style.display ="block"
    TeamSection.style.display ="none"
});

document.getElementById('Team').addEventListener('click', function () {
    document.getElementById('TeamSection').click();
    HomeSection.style.display ="none";
    NoteSection.style.display ="none"
    TodoSection.style.display ="none"
    TeamSection.style.display ="block"
});




