window.addEventListener("load", atualizarTabelaGames);
window.addEventListener("load", atualizarTabelaPlataforma);
window.addEventListener("load", atualizarTabelaGeneros);
window.addEventListener("load", atualizarTabelaDesenvolvedora);


// ------------------------------------------ Games ----------------------------------------------------

function deletarGames(iid){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/games/" + iid,
            success: function(oRetorno){
                atualizarTabelaGames();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaGames(){
    try {
        $.ajax({
            type: "get",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/games",
            success: function(oRetorno){
                console.log(oRetorno);
                let sHtml = "";

                oRetorno.forEach(element => {
                    sHtml += "<tr class='row'>";
                    sHtml += "<td class='col-1 center'>" + element.id + "</td>";
                    sHtml += "<td class='col-2'>" + element.nome + "</td>";
                    sHtml += "<td class='col-1'>" + element.ano + "</td>";
                    sHtml += "<td class='col-1'>" + element.fx_etaria + "</td>";
                    sHtml += "<td class='col-2'>" + element.nome_desenvolvedora + "</td>";
                    sHtml += "<td class='col-2'>" + element.tipo + "</td>";
                    sHtml += "<td class='col-1'>" + element.descricao +"</td>";
                    sHtml += "<td class='col-2 center'>";
                    sHtml += "<a href='/inicial/AlteraGames/" + element.id + "'>";
                    sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                    sHtml += "</a>&nbsp;&nbsp;";
                    sHtml += "<a onclick='deletarGames(" + element.id + ")'>";
                    sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                    sHtml += "</a>";
                    sHtml += "</td>";
                    sHtml += "</tr>";
                });

                $("#tabelaGames").html(sHtml);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Atualizar");
    }
}

$("#cadastrar-games").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let nome = $("#nome").val();
    let ano = $("#ano").val();
    let etaria = $("#fx_etaria").val();
    let desenvolvedora_id = $("#desenvolvedora_id").val();
    let tipo_id = $("#tipo_id").val();
    let genero_id = $("#genero_id").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/games",
            data: {
                id: id,
                nome: nome,
                ano: ano,
                fx_etaria: etaria,
                desenvolvedora_id: desenvolvedora_id,
                tipo_id: tipo_id,
                genero_id: genero_id
            },
            type: "post",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaGames"
            },
            error: function(pablo){
                console.log(pablo);
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});

$("#altera-games").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let nome = $("#nome").val();
    let ano = $("#ano").val();
    let etaria = $("#fx_etaria").val();
    let aiPai = $("#desenvolvedora_id").val();
    let paaara = $("#tipo_id").val();
    let qristyan = $("#genero_id").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/games/" + id,
            data: {
                id: id,
                nome: nome,
                ano: ano,
                fx_etaria: etaria,
                desenvolvedora_id: aiPai,
                tipo_id: paaara,
                genero_id: qristyan
            },
            type: "put",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaGames"
            },
            error: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaGames"
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});

$("#fx_etaria").on("keyup", function(){
    if (this.value > 99){
        this.value = this.value.substr(0, 2);
    } else if (this.value < 0){
        this.value = 0;
    }
});

//-------------------------------------------- Plataforma -----------------------------------------------------------------

function deletarPlataforma(iid){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/plataforma/" + iid,
            success: function(oRetorno){
                atualizarTabelaPlataforma();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaPlataforma(){
    try {
        $.ajax({
            type: "get",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/plataforma",
            success: function(oRetorno){
                console.log(oRetorno);
                let sHtml = "";

                oRetorno.forEach(element => {
                    sHtml += "<tr class='row'>";
                    sHtml += "<td class='col-2 center'>" + element.id + "</td>";
                    sHtml += "<td class='col-8 center'>" + element.tipo + "</td>";
                    sHtml += "<td class='col-2 center'>";
                    sHtml += "<a href='/inicial/AlteraPlataforma/" + element.id + "'>";
                    sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                    sHtml += "</a>&nbsp;&nbsp;";
                    sHtml += "<a onclick='deletarPlataforma(" + element.id + ")'>";
                    sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                    sHtml += "</a>";
                    sHtml += "</td>";
                    sHtml += "</tr>";
                });

                $("#tabelaPlataforma").html(sHtml);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Atualizar");
    }
}

$("#cadastrar-plataforma").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let tipo = $("#tipo").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/plataforma",
            data: {
                id: id,
                tipo: tipo
            },
            type: "post",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaPlataforma"
            },
            error: function(pablo){
                console.log(pablo);
                
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});

$("#altera-plataforma").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let tipo = $("#tipo").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/plataforma/" + id,
            data: {
                id: id,
                tipo: tipo
            },
            type: "put",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaPlataforma"
            },
            error: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaPlataforma"
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});

//----------------------------------------------Generos--------------------------------------------------------------
function deletarGeneros(iid){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/generos/" + iid,
            success: function(oRetorno){
                atualizarTabelaGeneros();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaGeneros(){
    try {
        $.ajax({
            type: "get",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/generos",
            success: function(oRetorno){
                console.log(oRetorno);
                let sHtml = "";

                oRetorno.forEach(element => {
                    sHtml += "<tr class='row'>";
                    sHtml += "<td class='col-2 center'>" + element.id + "</td>";
                    sHtml += "<td class='col-8 center'>" + element.descricao + "</td>";
                    sHtml += "<td class='col-2 center'>";
                    sHtml += "<a href='/inicial/AlteraGeneros/" + element.id + "'>";
                    sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                    sHtml += "</a>&nbsp;&nbsp;";
                    sHtml += "<a onclick='deletarGeneros(" + element.id + ")'>";
                    sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                    sHtml += "</a>";
                    sHtml += "</td>";
                    sHtml += "</tr>";
                });

                $("#tabelaGeneros").html(sHtml);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Atualizar");
    }
}

$("#cadastrar-generos").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let descricao = $("#descricao").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/generos",
            data: {
                id: id,
                descricao: descricao
            },
            type: "post",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaGeneros"
            },
            error: function(pablo){
                console.log(pablo);
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});

$("#altera-generos").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let descricao = $("#descricao").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/generos/" + id,
            data: {
                id: id,
                descricao: descricao
            },
            type: "put",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href ="http://127.0.0.1:8000/inicial/ConsultaGeneros";
            },
            error: function(pablo){
                console.log(pablo);
                window.location.href ="http://127.0.0.1:8000/inicial/ConsultaGeneros"
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});

//--------------------------------------------------------Desenvolvedora-------------------------------------------------

function deletarDesenvolvedora(iid){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/desenvolvedora/" + iid,
            success: function(oRetorno){
                atualizarTabelaDesenvolvedora();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizarTabelaDesenvolvedora(){
    try {
        $.ajax({
            type: "get",
            async: false,
            dataType: "json",
            url: "http://127.0.0.1:8000/api/desenvolvedora",
            success: function(oRetorno){
                console.log(oRetorno);
                let sHtml = "";

                oRetorno.forEach(element => {
                    sHtml += "<tr class='row'>";
                    sHtml += "<td class='col-2 center'>" + element.id + "</td>";
                    sHtml += "<td class='col-4 center'>" + element.nome_desenvolvedora + "</td>";
                    sHtml += "<td class='col-4 center'>" + element.ceo + "</td>";
                    sHtml += "<td class='col-2 center'>";
                    sHtml += "<a href='/inicial/AlteraDesenvolvedora/" + element.id + "'>";
                    sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                    sHtml += "</a>&nbsp;&nbsp;";
                    sHtml += "<a onclick='deletarDesenvolvedora(" + element.id + ")'>";
                    sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                    sHtml += "</a>";
                    sHtml += "</td>";
                    sHtml += "</tr>";
                });

                $("#tabelaDesenvolvedora").html(sHtml);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Atualizar");
    }
}

$("#cadastrar-desenvolvedora").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let nome_desenvolvedora = $("#nome_desenvolvedora").val();
    let ceo = $("#ceo").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/desenvolvedora",
            data: {
                id: id,
                nome_desenvolvedora: nome_desenvolvedora,
                ceo: ceo
            },
            type: "post",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaDesenvolvedora"
            },
            error: function(pablo){
                console.log(pablo);
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});

$("#altera-desenvolvedora").on("click", function(e){

    e.preventDefault();

    let id = $("#id").val();
    let nome_desenvolvedora = $("#nome_desenvolvedora").val();
    let ceo = $("#ceo").val();

    try {
        $.ajax({
            async: false,
            url: "http://127.0.0.1:8000/api/desenvolvedora/" + id,
            data: {
                id: id,
                nome_desenvolvedora: nome_desenvolvedora,
                ceo: ceo
            },
            type: "put",
            dataType: "json",
            success: function(pablo){
                console.log(pablo);
                window.location.href = "http://127.0.0.1:8000/inicial/ConsultaDesenvolvedora"
            },
            error: function(pablo){
                console.log(pablo);
            }
        });
    } catch(satanas){
        alert("ERRO! Não foi possível realizar a requisição!");
        console.log(satanas);
    }
});
