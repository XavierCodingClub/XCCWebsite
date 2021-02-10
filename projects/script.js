var projects = [
    {
        "name": "XCCWebsite",
        "description": "The website we use to promote the club (you're looking at it right now!)",
        "links": {
            "github": "https://github.com/XavierCodingClub/XCCWebsite",
        },
    },
    {
        "name": "vscode",
        "description": "ever heard of it?",
        "links": {
            "github": "https://github.com/microsoft/vscode",
        },
    }
    /*
    {
        "name": "ccc prep",
        "description": "plan to prepare club members for the upcoming 2021 ccc",
    },
    {
        "name": "meet your maker",
        "description": "a 2d survival game where you- blah blah blah the project is kinda dead tho"
    }
    */
]
var container = document.getElementById("container")
var pTemplate = document.getElementById("ptemplate")
for (let i = 0; i < projects.length; i++) {
    const element = projects[i];
    var clone = pTemplate.cloneNode(true)
    clone.id=""
    clone.querySelector("#github").onclick = () => window.open(element["links"]["github"])
    clone.querySelector("h2").textContent = element["name"]
    clone.querySelector("p").textContent = element["description"]
    container.append(clone)
}
