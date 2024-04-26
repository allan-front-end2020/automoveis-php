function excluirAutomovel(idAutomovel) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '../excluir.php',
        data: {
            id: idAutomovel

        },
        success: function(response) {
            if (response.success) {

                window.location.href = 'index.php'; // Redireciona para index.php
                window.location.href = 'index.php?status=success';
            } else {
                alert(response.message); // Exibe uma mensagem de erro
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText, status);
            alert('Erro ao processar a requisição. Verifique o console para mais detalhes.');
        }
    });
}

function exibirModalExclusao(idAutomovel, marcaAutomovel) {
    $.confirm({
        title: 'Confirmar Exclusão',
        content: 'Tem certeza que deseja excluir o automóvel da marca: <strong>' + marcaAutomovel + '</strong>?',
        buttons: {
            confirm: {
                text: 'Excluir',
                btnClass: 'btn-danger',
                action: function() {
                    excluirAutomovel(idAutomovel);
                }
            },
            cancel: {
                text: 'Cancelar',
                btnClass: 'btn-secondary'
            }
        }
    });
}