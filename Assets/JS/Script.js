const cartas = [
    {nome_stand: "The Fool", imagem_stand: "Assets/Images/Cards/00.jpg"},
    {nome_stand: "Magician's Red", imagem_stand: "Assets/Images/Cards/01.jpg"},
    {nome_stand: "High Priestess", imagem_stand: "Assets/Images/Cards/02.jpg"},
    {nome_stand: "Empress", imagem_stand: "Assets/Images/Cards/03.jpg"},
    {nome_stand: "Emperor", imagem_stand: "Assets/Images/Cards/04.jpg"},
    {nome_stand: "Hierophant Green", imagem_stand: "Assets/Images/Cards/05.jpg"},
    {nome_stand: "Lovers", imagem_stand: "Assets/Images/Cards/06.jpg"},
    {nome_stand: "Silver Chariot", imagem_stand: "Assets/Images/Cards/07.jpg"},
    {nome_stand: "Strength", imagem_stand: "Assets/Images/Cards/08.jpg"},
    {nome_stand: "Hermit Purple", imagem_stand: "Assets/Images/Cards/09.jpg"},
    {nome_stand: "Wheel of Fortune", imagem_stand: "Assets/Images/Cards/10.jpg"},
    {nome_stand: "Justice", imagem_stand: "Assets/Images/Cards/11.jpg"},
    {nome_stand: "Hanged Man", imagem_stand: "Assets/Images/Cards/12.jpg"},
    {nome_stand: "Death Thirteen", imagem_stand: "Assets/Images/Cards/13.jpg"},
    {nome_stand: "Yellow Temperance", imagem_stand: "Assets/Images/Cards/14.jpg"},
    {nome_stand: "Ebony Devil", imagem_stand: "Assets/Images/Cards/15.jpg"},
    {nome_stand: "Tower of Gray", imagem_stand: "Assets/Images/Cards/16.jpg"},
    {nome_stand: "Star Platinum", imagem_stand: "Assets/Images/Cards/17.jpg"},
    {nome_stand: "Dark Blue Moon", imagem_stand: "Assets/Images/Cards/18.jpg"},
    {nome_stand: "Sun", imagem_stand: "Assets/Images/Cards/19.jpg"},
    {nome_stand: "Judgement", imagem_stand: "Assets/Images/Cards/20.jpg"},
    {nome_stand: "The World", imagem_stand: "Assets/Images/Cards/21.jpg"}
];

var indice_carta = 0;

function Mudar_Carta(condicao)
{

    if(indice_carta - 1 < 0 && condicao == "anterior")
    {

        alert("Esta é a primeira carta do baralho! Veja as próximas.");
        
    }

    else if(indice_carta + 1 > 21 && condicao == "proxima")
    {

        alert("Esta é a última carta do baralho! Veja as anteriores.");

    }

    else
    {

        if(condicao == "anterior")
        {

            indice_carta--;

        }

        else if(condicao == "proxima")
        {

            indice_carta++;

        }

        //console.log(indice_carta);

        document.getElementById("nome").innerHTML = cartas[indice_carta].nome_stand;

        document.getElementById("imagem").style = "background-image: url(" + cartas[indice_carta].imagem_stand + ");";

    }

}
