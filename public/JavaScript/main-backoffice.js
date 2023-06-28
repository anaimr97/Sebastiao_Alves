var intervalo = setInterval(relogio, 1000);

function relogio(){
    let data_atual = new Date();

    var horas = data_atual.getHours(); 
    var minutos = data_atual.getMinutes().toString().padStart(2, '0');
    var segundos = data_atual.getSeconds().toString().padStart(2, '0');

    
    
    document.getElementById('relogio').innerHTML = horas + ":" + minutos + ":" + segundos;

}

var intervalo2 = setInterval(calendario, 1000);

function calendario(){
    let data_atual = new Date();

    var array_dias = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    var diaDaSemana = array_dias[data_atual.getDay()];

    var dia = data_atual.getDate();

    var array_meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    var mes = array_meses[(data_atual.getMonth())];

    var ano = data_atual.getFullYear();

    
    
    document.getElementById('calendario').innerHTML = diaDaSemana + ", " + dia + " de " + mes + " de " + ano;

}

function abrirPopUp(){

    var url = "http://localhost/sebastiao_alves/filemanager/tinyfilemanager.php";
    var nomeJanela = "PopUp"; 

    window.open(url, nomeJanela, "width=800, height=500"); 
}