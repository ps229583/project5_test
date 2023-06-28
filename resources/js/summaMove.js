"use strict"
const apiBasis = "http://127.0.0.1:8000/api/"
const apiOefeningen = apiBasis + "oefeningen"
let oefeningen = []

const laadOefeningen = async () => {
    const response = await axios.get(apiOefeningen)

    if (response.status != 200) {
        alert(`Fout bij het lezen van de oefeningen: ${response.status} (${response.statusText})`)
        return
    }

    const json = await response.data
    oefeningen = json.data
    toonOefeningen()
}

const toonOefeningen = () => {
    let tabelInhoud = ''
    oefeningen.map(el => tabelInhoud += `<tr><td>${el.naam}</td><td>${el.beschrijving}</td><td>${el.vertaling}</td>
                    <td onclick="verwijder(${el.id})"> x </td></tr>`)
    document.querySelector("#tabelInhoud").innerHTML = tabelInhoud
}
const laad = async () => {
    await laadOefeningen()
}

const voegToe = async () => {

    var oefening = {};

    oefening.naam = document.querySelector("#naam").value;
    oefening.beschrijving = document.querySelector("#beschrijving").value;
    oefening.vertaling= document.querySelector("#vertaling").value;


    const response = await axios.post(apiOefeningen, oefening, {
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })

    if (response.status != 201) {
        alert(
          `Fout bij het toevoegen van de oefening: ${response.status} (${response.statusText})`
        )
        return
    }

    const json = await response.data

    document.querySelector("#naam").value = ''
    document.querySelector("#beschrijving").value = ''
    document.querySelector("#vertaling").value = ''

    await laadOefeningen()
}

const verwijder = async (id) => {
    const apiDelete = `${apiOefeningen}/${id}`
    const response = await axios.delete(apiDelete, {
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })

    if (response.status != 202) {
        alert(
         `Fout bij het verwijderen van de oefening: ${response.status} (${response.statusText})`
        )
    }
    const json = await response.data

    oefeningen = await response.data
    await laadOefeningen()
}
