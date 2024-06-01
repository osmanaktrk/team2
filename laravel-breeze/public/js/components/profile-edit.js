document.addEventListener('DOMContentLoaded', function () {
    const educationLevel = document.getElementById('educationLevel');
    const specializationGroups = document.querySelectorAll('.specializationGroup');
    const yearGroup = document.getElementById('year');

    educationLevel.addEventListener('change', function () {
        const selectedLevel = educationLevel.value;

        specializationGroups.forEach(group => {
            group.style.display = 'none';
        });

        if (selectedLevel === "Select Education Level") {
            yearGroup.style.display = 'none';
        } else if (selectedLevel === "Graduaat") {
            document.getElementById('Graduaat').style.display = 'block';
            yearGroup.style.display = 'block';
        } else if (selectedLevel === "Bachelor") {
            document.getElementById('Bachelor').style.display = 'block';
            yearGroup.style.display = 'block';
        } else if (selectedLevel === "Lerarenopleiding") {
            document.getElementById('Lerarenopleiding').style.display = 'block';
            yearGroup.style.display = 'block';
        } else if (selectedLevel === "Kunstopleiding") {
            document.getElementById('Kunstopleiding').style.display = 'block';
            yearGroup.style.display = 'block';
        } else if (selectedLevel === "Postgraduaat") {
            document.getElementById('Postgraduaat').style.display = 'block';
            yearGroup.style.display = 'block';
        } else if (selectedLevel === "Bachelor-na-bachelor") {
            document.getElementById('Bachelor-na-bachelor').style.display = 'block';
            yearGroup.style.display = 'block';
        }
    });
});