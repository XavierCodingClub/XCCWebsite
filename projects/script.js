var projects = [
    {
        "name": "XCCWebsite",
        "description": "The website we use to promote the club (you're looking at it right now!)",
    },
    {
        "name": "CCC Prep",
        "description": "Plan to prepare club members for the upcoming 2021 CCC",
    },
    {
        "name": "Meet Your Maker",
        "description": "A 2D survival game where you- blah blah blah the project is kinda dead tho"
    }
]
var container = document.getElementById("container")
var pTemplate = document.getElementById("ptemplate")
for (let i = 0; i < projects.length; i++) {
    const element = projects[i];
    var clone = pTemplate.cloneNode(true)
    clone.id=""
    clone.querySelector("h2").textContent = element["name"]
    clone.querySelector("p").textContent = element["description"]
    container.append(clone)
}
