function handleFormSubmission(formId, resultId) {
    document.getElementById(formId).addEventListener("submit", function(event) {
        event.preventDefault();

        clearAllResultsExcept(resultId); // Clear other results before displaying new one

        let formData = new FormData(this);

        fetch("../Backend/index.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById(resultId).innerHTML = data;
        });
    });
}

function SendSleepNowData(formId, resultId) {
    document.getElementById(formId).addEventListener("submit", function(event) {
        event.preventDefault();

        clearAllResultsExcept(resultId); // Clear other results before displaying new one

        let now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        let AmPm = hours >= 12 ? "PM" : "AM";
        hours = hours % 12 || 12; // Convert to 12-hour format

        let form = document.getElementById(formId);
        let hiddenHours = form.querySelector(".hourInput");
        let hiddenMinutes = form.querySelector(".minuteInput");
        let hiddenAmPm = form.querySelector(".AmPmInput");
        // Set hidden inputs
        hiddenHours.value = hours;
        hiddenMinutes.value = minutes;
        hiddenAmPm.value = AmPm;

        let formData = new FormData(document.getElementById(formId));

        fetch("../Backend/index.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById(resultId).innerHTML = data;
        });
    });
}

// Function to clear all results except the current one
function clearAllResultsExcept(currentId) {
    document.querySelectorAll(".result-container").forEach(element => {
        if (element.id !== currentId) {
            element.innerHTML = ""; // Clear the result
        }
    });
}
document.addEventListener("DOMContentLoaded", function() {
    handleFormSubmission("sleepForm", "sleepResult");
    handleFormSubmission("WakeUpForm", "WakeUpResult");
    SendSleepNowData("SleepNow", "sleepNowResult");
    SendSleepNowData("SleepNow2", "sleepNowResult2");
});